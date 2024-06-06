-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2024 a las 18:27:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendadigital_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `00lineas_accion`
--

CREATE TABLE `00lineas_accion` (
  `id` int(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `porcentaje` int(10) NOT NULL,
  `idM` int(10) NOT NULL,
  `idE` int(10) NOT NULL,
  `idH` int(10) NOT NULL,
  `descripcion` text NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `00lineas_accion`
--

INSERT INTO `00lineas_accion` (`id`, `numero`, `porcentaje`, `idM`, `idE`, `idH`, `descripcion`, `url`) VALUES
(1, '1.1.1', 50, 11, 1, 1, 'Contar con un repositorio de proyectos de infraestructura de todo el Estado', ' '),
(2, '1.1.2', 100, 11, 1, 1, 'Constituir una Comisión de Infraestructura Tecnológica cuya responsabilidad será fomentar la coordinación entre responsables de infraestructura, abatir proyectos aislados, identificar economías de escala y fomentar eficiencia y eficacia', 'https://admiweb.col.gob.mx/archivos_prensa/banco_img/file_5f32c86d79c33_112.pdf'),
(3, '1.1.3', 43, 11, 1, 1, 'Realizar un diagnóstico de la infraestructura de telecomunicaciones de las distintas dependencias para identificar las necesidades de conectividad', ''),
(4, '1.1.4', 0, 11, 1, 1, 'Levantar un padrón de infraestructura tecnológica propiedad del Estado que fomente el intercambio tecnológico entre áreas y auxilie en la continuidad del servicio garantizando el mejor uso de cada uno', ''),
(5, '1.1.5', 100, 11, 1, 1, 'Establecer un presupuesto anual, sostenible y claro, que el Estado dedicará a la conectividad. El presupuesto debe privilegiar el mantenimiento de lo existente.', ''),
(6, '1.2.1', 100, 12, 1, 1, 'Establecer conjuntamente con la Federación las métricas de calidad de servicio y el ritmo al que crecerán los sitios conectados. Comprometer el levantamiento de encuestas de uso y satisfacción de usuario, así como su publicidad', ''),
(7, '1.2.2', 52, 12, 1, 1, 'Promover una simplificación y homologación de los procesos municipales para el proceso de entrega de permisos para el despliegue de redes de telecomunicaciones', ''),
(8, '1.2.3', 100, 12, 1, 1, 'Desarrollar, publicar y actualizar periódicamente el mapa de cobertura de banda ancha fija y móvil del estado', ''),
(9, '1.2.4', 100, 12, 1, 1, 'Gestionar con las empresas de telecomunicaciones un plan de expansión de cobertura de red de banda ancha', ''),
(10, '1.2.5', 100, 12, 1, 1, 'Propiciar que en las nuevas obras de infraestructura carretera se considere la factibilidad de integrar red de fibra óptica', ''),
(11, '1.2.6', 100, 12, 1, 1, 'Actualizar la meta periódicamente con las definiciones que IFT pudiera llegar a publicar con respecto al servicio de banda ancha', ''),
(12, '1.2.7', 25, 12, 1, 1, 'Realizar un diagnóstico sobre el Programa ARES y los pasos que deben darse para su adecuada explotación', ''),
(13, '1.3.1', 40, 13, 1, 1, 'Fortalecer la Red Estatal de Educación, Salud y Gobierno del Estado', ''),
(14, '1.3.2', 73, 13, 1, 1, 'Desarrollar, publicar y actualizar periódicamente el mapa de redes gratuitas de acceso a internet en espacios públicos', ''),
(15, '1.3.3', 0, 13, 1, 1, 'Emprender campañas de concientización sobre el buen uso y cuidado de las TIC', ''),
(16, '1.3.4', 100, 13, 1, 1, 'Garantizar el acceso seguro y la protección de datos personales en redes gratuitas públicas que ofrecen los programas de Gobierno', ''),
(17, '1.3.5', 78, 13, 1, 1, 'Priorizar la instalación de internet gratuito, en términos de localidades sin cobertura y población potencialmente usuaria', ''),
(18, '1.3.6', 100, 13, 1, 1, 'Implementar un centro único de gestión y monitoreo de todos los puntos de acceso, de tal manera que exista información para maximizar el tiempo de funcionamiento', ''),
(19, '1.3.7', 100, 13, 1, 1, 'Asegurar la conectividad de todas las dependencias estatales y las -principales dependencias en cada municipio, de tal manera que se garantice la existencia de redes que podrán también ser utilizadas para la prestación tanto de internet en espacios públic', ''),
(20, '1.3.8', 0, 13, 1, 1, 'Impulsar programas, en asociación con las empresas de telecomunicaciones, para contribuir a la conectividad en espacios públicos', ''),
(21, '1.4.1', 80, 14, 1, 1, 'Apoyar tecnologías que mejoren la confiabilidad de las comunicaciones y su integridad (como blockchain)', ''),
(22, '2.1.1', 0, 21, 2, 2, 'Realizar un diagnóstico del uso de TIC en las MiPyMEs colimenses', ''),
(23, '2.1.2', 100, 21, 2, 2, 'Implementar un programa de capacitación gerencial que promueva el uso y aprovechamiento de las TIC', ''),
(24, '2.1.3', 100, 21, 2, 2, 'Capacitar a las MiPyMEs en los beneficios del uso de TIC, incluyendo la seguridad y protección de datos', ''),
(25, '2.1.4', 83, 21, 2, 2, 'Desarrollar trámites y servicios gubernamentales en línea para el sector empresarial', ''),
(26, '2.1.5', 22, 21, 2, 2, 'Promover el uso de herramientas digitales para la interacción de las empresas con el gobierno', ''),
(27, '2.1.6', 15, 21, 2, 2, 'Desarrollar un programa para facilitar la obtención de crédito para la implementación de tecnologías de información en los procesos productivos y prestación de servicios de las MiPyMEs', ''),
(28, '2.1.7', 0, 21, 2, 2, 'Implementar esquemas de incentivos fiscales para MiPyMEs en proceso de digitalización', ''),
(29, '2.1.8', 100, 21, 2, 2, 'Fortalecer y promover la cultura de la economía digital', ''),
(30, '2.1.9', 0, 21, 2, 2, 'Incentivar a las empresas dedicadas al desarrollo de tecnologías de la información', ''),
(31, '3.1.1', 0, 31, 3, 2, 'Promover y vincular la formación de personal profesional y técnico en TIC para garantizar la existencia de talento en el mercado acorde a las vocaciones', ''),
(32, '3.1.2', 80, 31, 3, 2, 'Fomentar la inversión en proyectos estratégicos de modernización y tecnificación basados en TIC', ''),
(33, '3.2.1', 45, 32, 3, 2, 'Consolidar al Tecnoparque CLQ e iniciativas similares como modelo promotor de innovación y desarrollo', ''),
(34, '3.2.2', 0, 32, 3, 2, 'Instalar un punto de interconexión de internet (IXP) en el Tecnoparque CLQ', ''),
(35, '3.2.3', 0, 32, 3, 2, 'Impulsar la articulación de la iniciativa privada, gobierno, academia, sociedad y medio ambiente para la implementación de una política pública que impulse la economía digital y desarrollo sostenible', ''),
(36, '4.1.1', 0, 41, 4, 2, 'Realizar un diagnóstico del uso de TIC en las empresas que trabajan en los principales sectores económicos colimenses', ''),
(37, '4.1.2', 100, 41, 4, 2, 'Impulsar el uso de las TIC en la promoción e información turística local que incluya eventos, transporte, hospedaje y servicios', ''),
(38, '4.1.3', 100, 41, 4, 2, 'Promover la industria turística a través de dispositivos móviles que contengan los atractivos turísticos más relevantes del Estado', ''),
(39, '4.1.4', 0, 41, 4, 2, 'Fortalecer la gestión del sector agroindustrial a través del uso de las TIC.', ''),
(40, '4.1.5', 100, 41, 4, 2, 'Impulsar el desarrollo logístico portuario del Estado, incorporando tecnologías de información', ''),
(41, '4.1.6', 0, 41, 4, 2, 'Desarrollo e implementación del Atlas del Desarrollo Rural del Estado de Colima', ''),
(42, '4.1.7', 0, 41, 4, 2, 'Implementación de la plataforma de consulta al público sobre la vocación productiva del territorio en el Estado', ''),
(43, '5.1.1', 100, 51, 5, 3, 'Implementar la Ventanilla Única Estatal de trámites y servicios electrónicos que integre los trámites más demandados por la ciudadanía', ''),
(44, '5.1.2', 8, 51, 5, 3, 'Implementar el Expediente para Trámites y Servicios Electrónicos', ''),
(45, '5.1.3', 100, 51, 5, 3, 'Implementar el Portal Único del Gobierno del Estado de Colima', ''),
(46, '5.1.4', 97, 51, 5, 3, 'Construir un sistema basado en individuos que fortalezca el Registro Civil en el Estado', ''),
(47, '5.1.5', 84, 51, 5, 3, 'Implementar el expediente electrónico clínico local con los más altos estándares de protección de información personal', ''),
(48, '5.1.6', 72, 51, 5, 3, 'Construir un modelo que permita transitar a un gobierno sin papel', ''),
(49, '5.1.7', 96, 51, 5, 3, 'Colaborar en materia tecnológica y de asesoría con los municipios del estado para impulsar la implementación de servicios y trámites municipales electrónicos', ''),
(50, '5.1.8', 100, 51, 5, 3, 'Integrar un modelo del Registro del Territorio, que defina la política pública en el uso de TIC en esta área', ''),
(51, '5.1.9', 0, 51, 5, 3, 'Implementar un sistema interoperable único de identidad que permita identificar al usuario con una sola cuenta en las diferentes plataformas gubernamentales', ''),
(52, '5.1.10', 77, 51, 5, 3, 'Desarrollar e implementar lineamientos y políticas en materia de Gobierno Electrónico', ''),
(53, '5.2.1', 100, 52, 5, 3, 'Promover el uso de la Firma Electrónica en todo el ámbito público', ''),
(54, '5.2.2', 33, 52, 5, 3, 'Garantizar que todos los pagos estatales puedan hacerse en línea', ''),
(55, '5.2.3', 44, 52, 5, 3, 'Incentivar y promover el uso de trámites y servicios gubernamentales en línea', ''),
(56, '5.2.4', 87, 52, 5, 3, 'Asistir a la ciudadanía, a través de la Mesa de Ayuda, en los trámites y servicios gubernamentales en línea', ''),
(57, '5.2.5', 100, 52, 5, 3, 'Implementar pagos y servicios estatales a través de tiendas de conveniencia', ''),
(58, '5.2.6', 33, 52, 5, 3, 'Acercar los trámites y servicios gubernamentales a la población a través de kioscos electrónicos', ''),
(59, '5.2.7', 100, 52, 5, 3, 'Publicar en los portales digitales la lista de requisitos y montos de pago para trámites públicos', ''),
(60, '5.2.8', 50, 52, 5, 3, 'Dar seguridad en las transacciones electrónicas que realiza la población con gobierno para propiciar su adopción', ''),
(61, '6.1.1', 100, 61, 6, 3, 'Generar un Sistema Electrónico de Compras Públicas', ''),
(62, '6.1.2', 0, 61, 6, 3, 'Impulsar un modelo de contrataciones abiertas públicas basado en el uso y aprovechamiento de TIC', ''),
(63, '7.1.1', 100, 71, 7, 4, 'Crear y actualizar los programas de formación, capacitación y actualización para incorporar la educación en TIC', ''),
(64, '7.1.2', 100, 71, 7, 4, 'Promover la Certificación en competencias digitales para maestros docentes con valor curricular o escalafonario', ''),
(65, '7.1.3', 100, 71, 7, 4, 'Aumentar la eficiencia del sistema de administración escolar a través de portales en línea en todos los niveles educativos', ''),
(66, '7.1.4', 0, 71, 7, 4, 'Promover la creación de un Centro Tecnológico Educativo con laboratorios que estimulen la educación en TIC para acceso de la comunidad escolar que incluye a docentes, alumnado y padres de familia', ''),
(67, '7.1.5', 0, 71, 7, 4, 'Establecer y ejecutar convenios de colaboración entre la Universidad de Colima, Tecnológico de Colima y otras instituciones, para generar programas de capacitación que fomenten el desarrollo de las Competencias Digitales en los docentes de educación bási', ''),
(68, '7.2.1', 13, 72, 7, 4, 'Actualizar y acrecentar la infraestructura tecnológica existente en las distintas áreas de las instituciones (planteles educativos, edificios administrativos y oficinas centrales)', ''),
(69, '7.2.2', 0, 72, 7, 4, 'Desarrollar aplicaciones (“apps”) que ayuden al estudiante colimense a prepararse académicamente de cara a evaluaciones (desde pruebas educativas ordinarias y extraordinarias hasta preparación de exámenes de ingreso a los distintos niveles educativos)', ''),
(70, '7.2.3', 100, 72, 7, 4, 'Incrementar el número de planteles educativos con acceso a Internet efectivo y de calidad', ''),
(71, '7.2.4', 0, 72, 7, 4, 'Crear centros de cómputo gratuitos y puntos de conexión en zonas de alta densidad de estudiantes', ''),
(72, '7.2.5', 20, 72, 7, 4, 'Promover la capacitación para la generación y elaboración de secuencias y material didáctico que incorporen el uso de TIC para todos los niveles educativos y de acuerdo con los Programas de estudio vigentes', ''),
(73, '7.2.6', 100, 72, 7, 4, 'Crear aulas virtuales donde docentes y alumnos convivan, a manera de red social, en materia educativa', ''),
(74, '7.2.7', 0, 72, 7, 4, 'Promover la participación de la iniciativa privada en la aportación de herramientas tecnológicas a los planteles educativos', ''),
(75, '7.2.8', 0, 72, 7, 4, 'Involucrar escuelas técnicas y superiores para que apoyen en el mantenimiento preventivo y correctivo de la infraestructura de TIC en los planteles del sector educativo', ''),
(76, '7.2.9', 0, 72, 7, 4, 'Implementar modelos y/o contenidos para el desarrollo de habilidades STEM (Science, Technology, Engineering and Mathematics) en educación básica', ''),
(77, '7.3.1', 0, 73, 7, 4, 'Desarrollar un banco de datos, biblioteca y repositorio digital para docentes y alumnos', ''),
(78, '7.3.2', 0, 73, 7, 4, 'Producir contenidos que contribuyan a expandir la educación y llevarla fuera de los límites del sistema formal y con ello, impulsar la inclusión de la sociedad de la información y el conocimiento', ''),
(79, '7.3.3', 0, 73, 7, 4, 'Promover una capacitación digital, continua y permanente, flexible y adaptable a las necesidades del usuario final, utilizándola de forma intensiva para que la población acceda a nuevas formas de alfabetización', ''),
(80, '7.3.4', 60, 73, 7, 4, 'Promover la certificación profesional en TIC y la capacitación con valor curricular', ''),
(81, '8.1.1', 0, 81, 8, 4, 'Impulsar el desarrollo de formación de profesionistas en áreas de especialización TIC, incluyendo ingeniería, ciencias exactas y programación', ''),
(82, '8.1.2', 0, 81, 8, 4, 'Promover la interacción entre las universidades e instituciones de tecnología e innovación científica con la industria y la iniciativa privada con el fin de promover el desarrollo, estudio y ejercicio de la tecnología e innovación', ''),
(83, '8.1.3', 0, 81, 8, 4, 'Ampliar la divulgación de la ciencia y la tecnología en los planteles educativos, definiendo un plan de acción que aborde la materia de manera holística', ''),
(84, '8.1.4', 0, 81, 8, 4, 'Generar entre el alumnado de las carreras de ingenierías y ciencias exactas la cultura del Registro de Patentes de los proyectos que éste desarrolle', ''),
(85, '9.1.1', 100, 91, 9, 5, 'Definir un modelo de participación ciudadana en donde se incorpore el uso de TIC como herramienta estratégica para mejorar el vínculo entre la ciudadanía y el Sector Público. ', ''),
(86, '9.1.2', 100, 91, 9, 5, 'Impulsar modelos de participación ciudadana en las administraciones municipales en conjunto con el ejecutivo Estatal y en común acuerdo. ', ''),
(87, '9.1.3', 25, 91, 9, 5, 'Dotar a los organismos del sector público de nuevos canales, basados en instrumentos tecnológicos adecuados, para “oír la voz” de la ciudadanía, promoviendo la transparencia proactiva y la generación de datos abiertos. ', ''),
(88, '9.1.4', 50, 91, 9, 5, 'Diseñar un programa de educación cívica digital para la ciudadanía y para las organizaciones de la sociedad civil, que abone a la inclusión social. ', ''),
(89, '9.1.5', 50, 91, 9, 5, 'Diseñar una estrategia de difusión de las plataformas del Sector Público para la participación de la ciudadanía. ', ''),
(90, '9.2.1', 93, 92, 9, 5, 'Facilitar el acceso, uso, reutilización y redistribución de los datos considerados de carácter público puestos a disposición de cualquier persona.', ''),
(91, '9.2.2', 75, 92, 9, 5, 'Promover la participación ciudadana a través del uso de datos abiertos', ''),
(92, '9.2.3', 100, 92, 9, 5, 'Actualizar periódicamente los datos abiertos que corresponden a cada dependencia', ''),
(93, '9.2.4', 100, 92, 9, 5, 'Gestionar la participación de las Administraciones Municipales en la Política de datos abiertos', ''),
(94, '10.1.1', 100, 101, 10, 5, 'Integrar un Comité Interinstitucional sobre inclusión y participación ciudadana para la Agenda Digital de Colima', ''),
(95, '10.1.2', 100, 101, 10, 5, 'Realizar un diagnóstico sobre los usos y aprovechamientos de las TIC, diferenciado por grupos de población en el estado', ''),
(96, '10.1.3', 0, 101, 10, 5, 'Diseñar e impartir talleres de alfabetización digital con perspectiva de género y enfoque de derechos humanos, orientados a la atención de carencias y necesidades específicas de grupos definidos', ''),
(97, '10.1.4', 69, 101, 10, 5, 'Elaborar un Programa de Alfabetización Digital para reclusos con el fin de reinsertarlos a la sociedad', ''),
(98, '10.1.5', 0, 101, 10, 5, 'Promover en las comunidades rurales, campañas de Alfabetización Digital con un enfoque práctico, donde se les enseñe a utilizar aplicaciones y recursos que se requieren en la vida diaria', ''),
(99, '10.1.6', 0, 101, 10, 5, 'Crear un Programa Integral que considere el uso de las TIC en zonas vulnerables de la ciudad', ''),
(100, '10.1.7', 0, 101, 10, 5, 'Promoción y difusión de proyectos innovadores liderados por grupos vulnerables', ''),
(101, '10.1.8', 67, 101, 10, 5, 'Desarrollar y difundir aplicaciones que den accesibilidad a las personas con discapacidad a todas las plataformas de gobierno.', ''),
(102, '10.1.9', 0, 101, 10, 5, 'Reforzar la inclusión digital con perspectiva de género a través de la capacitación en TIC para el trabajo de las mujeres', '');

--
-- Disparadores `00lineas_accion`
--
DELIMITER $$
CREATE TRIGGER `01actualizar_meta` AFTER UPDATE ON `00lineas_accion` FOR EACH ROW BEGIN
    DECLARE nuevo_porcentaje_meta DECIMAL(5,2);

    -- Calcular el nuevo porcentaje de la meta
    SELECT AVG(porcentaje) INTO nuevo_porcentaje_meta
    FROM 00lineas_accion
    WHERE idM = NEW.idM;

    -- Actualizar el porcentaje de la meta
    UPDATE 01metas
    SET porcentaje = nuevo_porcentaje_meta
    WHERE idM = NEW.idM;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `01metas`
--

CREATE TABLE `01metas` (
  `id` int(10) NOT NULL,
  `idM` int(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `idE` int(10) NOT NULL,
  `idH` int(10) NOT NULL,
  `porcentaje` int(10) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `01metas`
--

INSERT INTO `01metas` (`id`, `idM`, `numero`, `idE`, `idH`, `porcentaje`, `descripcion`) VALUES
(1, 11, '1.1', 1, 1, 59, 'Todas las dependencias del Poder Ejecutivo del Estado contarán con infraestructura tecnológica que faciliten la comunicación entre las dependencias y ofrezcan de manera oportuna y sencilla los trámites y servicios del estado'),
(2, 12, '1.2', 1, 1, 82, 'Lograr una cobertura de banda ancha, con velocidad mínima de 2 Mbps de descarga, superior al 90% de los hogares'),
(3, 13, '1.3', 1, 1, 61, 'Ampliar las redes gratuitas de acceso a Internet e instalar más puntos de conexión, eficientes y seguros, en todos los municipios del estado'),
(4, 14, '1.4', 1, 1, 80, 'Implementar un modelo de seguridad informática'),
(5, 21, '2.1', 2, 2, 47, 'Incrementar en un 25% las MiPyMEs usuarias de TIC para la gestión de su negocio'),
(6, 31, '3.1', 3, 2, 40, 'Implementar programas y acciones que detonen la innovación y el emprendimiento en las MIPyMES'),
(7, 32, '3.2', 3, 2, 15, 'Posicionar al Tecnoparque CLQ como una de las cinco iniciativas más importantes en México que generan más proyectos de innovación y desarrollo'),
(8, 41, '4.1', 4, 2, 43, 'Más del 95% de las empresas de los principales sectores económicos incorporan herramientas TIC en su gestión y prestación de sus servicios'),
(9, 51, '5.1', 5, 3, 73, 'Integrar un ecosistema que contemple al menos cinco modelos de gestión gubernamental de gobierno electrónico'),
(10, 52, '5.2', 5, 3, 68, 'Más de la mitad de los accesos a los servicios y pagos más utilizados haya sido a través de alguna plataforma digital'),
(11, 61, '6.1', 6, 3, 50, 'La mitad de las contrataciones públicas anuales se realizarán mediante una Plataforma Digital Única'),
(12, 71, '7.1', 7, 4, 60, 'Todo el personal docente, directores y técnico-pedagógico deberá estar capacitado en la utilización de TIC'),
(13, 72, '7.2', 7, 4, 26, 'Incrementar en al menos un 25% la incorporación de herramientas tecnológicas en los modelos de enseñanza de las escuelas de todos los niveles'),
(14, 73, '7.3', 7, 4, 15, 'Diseñar un ecosistema de educación en línea que permita abatir la brecha educativa, el rezago educativo y la deserción escolar, así como complementar la docencia presencial y promover la educación continua, técnica y extracurricular'),
(15, 81, '8.1', 8, 4, 0, 'Aumentar la proporción de profesionales y técnicos graduados en ingeniería, ciencias exactas y programación, con énfasis en la equidad de género'),
(16, 91, '9.1', 9, 5, 65, 'Adoptar estándares y modelos de participación e interacción ciudadana a través de canales electrónicos en el 100% de las instituciones gubernamentales de Colima'),
(17, 92, '9.2', 9, 5, 92, 'Implementar en todas las dependencias de la entidad la política de datos abiertos del gobierno federal'),
(18, 101, '10.1', 10, 5, 37, 'Mejorar los indicadores de inclusión digital de los grupos vulnerables');

--
-- Disparadores `01metas`
--
DELIMITER $$
CREATE TRIGGER `02actualizar_estrategia` AFTER UPDATE ON `01metas` FOR EACH ROW BEGIN
    DECLARE nuevo_porcentaje_estrategia DECIMAL(5,2);

    -- Calcular el nuevo porcentaje de la estrategia
    SELECT AVG(porcentaje) INTO nuevo_porcentaje_estrategia
    FROM 01metas
    WHERE idE = NEW.idE;

    -- Actualizar el porcentaje de la estrategia
    UPDATE 02estrategias
    SET porcentaje = nuevo_porcentaje_estrategia
    WHERE idE = NEW.idE;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `02estrategias`
--

CREATE TABLE `02estrategias` (
  `idE` int(10) NOT NULL,
  `idH` int(10) NOT NULL,
  `porcentaje` int(10) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `02estrategias`
--

INSERT INTO `02estrategias` (`idE`, `idH`, `porcentaje`, `descripcion`) VALUES
(1, 1, 71, 'Reducir la brecha de infraestructura que persiste en la entidad, facilitando a los colimenses la conectividad a redes de telecomunicaciones que sean seguras, confiables y de calidad adecuada'),
(2, 2, 47, 'Promover la incorporación de las micro, pequeñas y medianas empresas (MiPyMEs) al mundo digital desde una perspectiva integral'),
(3, 2, 28, 'Impulsar la innovación tecnológica y la utilización de las TIC en las cadenas de producción de las MiPyMEs'),
(4, 2, 43, 'Impulsar los principales sectores económicos colimenses a través del uso de las TIC: turismo, agroindustria y logística-portuaria'),
(5, 3, 71, 'Modernizar la administración pública y modificar la interacción gobierno-ciudadano a través de la incorporación de TIC en la prestación de bienes y servicios públicos'),
(6, 3, 50, 'Implementar un modelo que impulse la transparencia proactiva en las compras gubernamentales'),
(7, 4, 34, 'Utilizar las TIC como instrumentos de formación, capacitación y actualización de docentes, directivos y personal de apoyo técnico-pedagógico de educación básica, educación media y superior, así como un medio para promover la educación continua de la población.'),
(8, 4, 0, 'Utilizar las TIC para hacer de la ciencia, la tecnología y la innovación detonantes del desarrollo de la competitividad y del progreso económico y social'),
(9, 5, 79, 'Fomentar la participación social en la planeación, ejecución y evaluación de políticas públicas'),
(10, 5, 37, 'Diseñar y ejecutar políticas de inclusión digital para los grupos o sectores más desfavorecidos o excluidos');

--
-- Disparadores `02estrategias`
--
DELIMITER $$
CREATE TRIGGER `03actualizar_habilitador` AFTER UPDATE ON `02estrategias` FOR EACH ROW BEGIN
    DECLARE nuevo_porcentaje_habilitador DECIMAL(5,2);

    -- Calcular el nuevo porcentaje del habilitador
    SELECT AVG(porcentaje) INTO nuevo_porcentaje_habilitador
    FROM 02estrategias
    WHERE idH = NEW.idH;

    -- Actualizar el porcentaje del habilitador
    UPDATE 03habilitador
    SET porcentaje = nuevo_porcentaje_habilitador
    WHERE idH = NEW.idH;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `03habilitador`
--

CREATE TABLE `03habilitador` (
  `idH` int(10) NOT NULL,
  `porcentaje` int(10) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `03habilitador`
--

INSERT INTO `03habilitador` (`idH`, `porcentaje`, `nombre`) VALUES
(1, 71, 'ACCESO UNIVERSAL A LAS TIC´S'),
(2, 39, 'ECONOMÍA DIGITAL'),
(3, 61, 'GOBIERNO ELECTRÓNICO'),
(4, 17, 'E-EDUCACIÓN'),
(5, 58, 'INCLUSIÓN Y PARTICIPACIÓN CIUDADANA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `deleted` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `deleted`) VALUES
(1, 'admin', 'Administrator', 0),
(2, 'users', 'General Usersssssssssssss', 0),
(3, 'jaja', 'no se', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(10) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(3) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$AlnhaiJgQ6EAHZYOhib8.ui1bnm7t327j7IdXb7r0iwYW/03qEPQe', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1717606831, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(5, '127.0.0.1', 'rafa', '$2y$10$l9MRew2q/DC9kFKzX9lQte6X3lO8JUAwmt.OJ1RsQCHyYDgKgCQLG', 'jperez78@ucol.mx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1716320431, 1716998816, 1, 'Jose Rafael', 'Perez Hernandez', 'members', '3141484503');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(8, 5, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `01metas`
--
ALTER TABLE `01metas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `02estrategias`
--
ALTER TABLE `02estrategias`
  ADD PRIMARY KEY (`idE`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `uc_email` (`email`) USING BTREE,
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`) USING BTREE,
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`) USING BTREE,
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`) USING BTREE;

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`) USING BTREE,
  ADD KEY `fk_users_groups_users1_idx` (`user_id`) USING BTREE,
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
