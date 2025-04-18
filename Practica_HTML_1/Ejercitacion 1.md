1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?
2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos
con HTML?
3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y
obsoleto?
4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?
5. Qué son los metadatos y cómo se especifican en HTML?

Respuestas:

1. HTML (HyperText Markup Language) es un lenguaje de enmarcado utilizado para la creación de páginas web a través de etiquetas que encierran el contenido a mostrar. La versión actual de HTML es HTML 5.0, las anteriores fueron HTML, HTML+, HTML 3.0, 3.1, 3.2 y 4.0. Originalmente fue lanzado al mercado en el 1993.
2. W3C recomienda tres pasos distintos para la creación de documentos HTML:
   1. Separar estructura y presentación.
   2. Considerar la accesibilidad universal a la Web.
   3. Ayudar a los agentes de usuario con la representación incremental.
3. Un elemento o atributo marcado como desaprobado en la especificación todavía es válido, pero se recomienda no usarlo porque está en proceso de ser eliminado en futuras versiones. Mientras que un elemento o atributo obsoleto ya no es parte del estándar HTML actual (ej. HTML5) y no debe usarse.
4. El "DTD" se refiere a la Definición del Tipo de Documento; Los ejemplos contemplados son los siguientes: 

    Define la cadena a la que se expandirá la entidad "%fontstyle;": <!ENTITY % fontstyle "TT | I | B | BIG | SMALL">
    Define un tipo de elemente UL y el modelo de contenido de este tipo de elemento se ha declarado como "al menos un elemento LI": <!ELEMENT UL - - (LI)+>
    Define la declaración de un tipo de elemento vacío: <!ELEMENT IMG - O EMPTY>
5. El HTML permite a los autores especificar metadatos, esto es información sobre un documento más que contenido del propio documento.
    Como ejemplo, para especificar el autor de un documento, puede utilizarse el elemento META como sigue: <META name="Author" content="Dave Raggett"> El significado de una propiedad y el conjunto de valores legales para esa propiedad debería estar definida en un diccionario de referencia llamado perfil. Por ejemplo, un perfil diseñado para ayudar a los motores de búsqueda a indexar documentos podría definir propiedades tales como "author", "copyright", "keywords", etc.
