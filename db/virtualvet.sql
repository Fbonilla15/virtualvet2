-- Tabla de Usuarios
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `identification` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Información Personal
CREATE TABLE `informacion_personal` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20),
  `direccion` varchar(255),
  `especializacion` varchar(100), -- Solo para médicos veterinarios
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Citas
CREATE TABLE `citas` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `veterinario_id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` varchar(20) NOT NULL,
  `chat_id` int(10) UNSIGNED, -- Puedes vincular esto con una tabla de chat si es necesario
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`),
  FOREIGN KEY (`veterinario_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Mensajes en el Chat
CREATE TABLE `mensajes_chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `cita_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` datetime NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`cita_id`) REFERENCES `citas` (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
