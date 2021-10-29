## SQL request
SELECT def_text FROM definitions WHERE word_id = word_id_research

## Make request more efficient
To make the request more efficient, we have to use Join
SELECT count(\*) FROM words JOIN translations ON words.id = translations.word_id WHERE translations.translated_form IS NOT NULL