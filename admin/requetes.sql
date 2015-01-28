SELECT
	`id`,
	`title`
FROM
	`page`
WHERE
	1;

SELECT
	`id`,
	`title`,
	`menu_title`,
	`body`,
	`css`,
	`page`
FROM
	`page`
WHERE
	`id` = 5;

UPDATE
	`page`
SET
	`title` = 'HAHAHAH',
	`menu_title` = 'Hahaha',
	`page` = 'marie',
	`body`='Body',
	`css`='#menu a{color: #f00;}'
WHERE
	`id` = 5;

DELETE FROM
	`page`
WHERE
	id = 6;

INSERT INTO
	`page`
(
	`title`,
	`menu_title`,
	`page`,
	`body`,
	`css`
) VALUES (
	't',
	'mt',
	'p',
	'b',
	'c'
)