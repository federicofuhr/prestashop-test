<?php return array (
  'parameters' => 
  array (
    'database_host' => getenv('DB_SERVER') ?: 'db',
    'database_port' => getenv('DB_PORT'),
    'database_name' => getenv('DB_NAME') ?: 'db',
    'database_user' => getenv('DB_USER') ?: 'db',
    'database_password' => getenv('DB_PASSWORD') ?: 'db',
    'database_prefix' => 'ps_',
    'database_engine' => 'InnoDB',
    'mailer_transport' => 'smtp',
    'mailer_host' => '127.0.0.1',
    'mailer_user' => NULL,
    'mailer_password' => NULL,
    'secret' => '2AUaPz6JBFNJ4jD3o01FHMZJaEkLMykYPi6Z5iEGHSf6TcWvkG6bxk7iYkDZH8sd',
    'ps_caching' => 'CacheMemcache',
    'ps_cache_enable' => false,
    'ps_creation_date' => '2026-03-23',
    'locale' => 'es-ES',
    'use_debug_toolbar' => true,
    'cookie_key' => '3SZO5NZ7uBdhgLZNrbf24eZKjFYbk1G73QUuFwRWvIKCKwPSjrPksXqgYV7bG0Rb',
    'cookie_iv' => 'KUtx5Vi8UY4HyXrKWcCY5LeGff7sYbMC',
    'new_cookie_key' => 'def000004cec9c5579c86058d9e5e7e4b235640cc5c58c36ff1d9a52511f19c572f09059c74f5d5611fa31d97bb9f856beb5aa231800277b49db1bcace257297ea5bc559',
    'api_public_key' => '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwt7+8010ZwfkkMGe/TRw
hAZKTh83/WyXqqM6OOXfRpOyKGl6PhMSf0xsMSaTPWYHRjLW7shoURGvA7LL2g9F
wPrB3nOVhZ+xmlb0JBZoquiO2eXUENc1VU8Kpxxc30XMz810TcSlgRQk5tIgUOlG
sOOEhvHeKHVoac7tJzhxa4gZvAeYPqyDaJ1JHO+ekEbHx1AoJUpO2hxLEZFRNW0w
JFTh26h6E1ETXtYgwYyiMeeWU0lGSHMARWypGqKJetigaNUbQMcmqeC8/3n96Lzo
bEw9A+6ONeS/92HyEnXO22DplRKf2uPD+3T7etABFNvZjKhO3lPsYmEUQYFkjSas
xwIDAQAB
-----END PUBLIC KEY-----
',
    'api_private_key' => '-----BEGIN PRIVATE KEY-----
MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDC3v7zTXRnB+SQ
wZ79NHCEBkpOHzf9bJeqozo45d9Gk7IoaXo+ExJ/TGwxJpM9ZgdGMtbuyGhREa8D
ssvaD0XA+sHec5WFn7GaVvQkFmiq6I7Z5dQQ1zVVTwqnHFzfRczPzXRNxKWBFCTm
0iBQ6Uaw44SG8d4odWhpzu0nOHFriBm8B5g+rINonUkc756QRsfHUCglSk7aHEsR
kVE1bTAkVOHbqHoTURNe1iDBjKIx55ZTSUZIcwBFbKkaool62KBo1RtAxyap4Lz/
ef3ovOhsTD0D7o415L/3YfISdc7bYOmVEp/a48P7dPt60AEU29mMqE7eU+xiYRRB
gWSNJqzHAgMBAAECgf8gA+xXdhbl5YQvNQmtnuDdZoWDX0NMFCHHudxAT6H1qyES
c40aS1MoD1cgf9uSwk6NwXIk9fUea5woHYMkBOXaRxwLQtPziYU61h1kSODLM2nq
Ypuw3VAxHTSx5W96xqKUNg7We8OH+OVicBQqZArPuaB1uFYDmuwUG73LlaeFIPce
BCo88NSIiYeBfcca8RHKYfzSPVbX39wdjDC+UyXocIipL3BL+bGok2E79TIMljT6
/sOOtN9uAjq8hQizOHuyYyEqzo9BTll2EqYtsSWCDrw6tCSMW22bmHfdBshC9Aap
97ok4U6d2/c55TZ8tKPjc0FMPb+3nWSeL3bBSaECgYEA4WbBGrB74VU2+V5wqBJv
IyAGWQKuar7oGoiMegz8u7D7jBrDZA4i+HPxVpzZRPRqA8+iBIw4yHgRp5UXiMVY
BWyiWkFp7gw0qSLGlg6GQki00hRFv8gg8ScFFGnD/c27oZA2X+9g9xY1gX3ZFTJ7
nn2NesIKSmtlIdL6UAqu5FECgYEA3VM9QO43vIywC3RBcZt6NG0J/vH27lfYMJjM
jn50sgyYKuSeTc4HIoRIzuF7ZoHFDc8LRj+hOMNV63E6xEtngEa+X3UwVqwYdwYr
ZOPz3X4CEMDyzfgmDgrv6p6FyTaj45dWd8930b+3GSezcZyyKdZXib1ACgzCWNjs
+3OCsZcCgYEAl2lnHn6fOOb9XtZJ5x06+uVwXiqm753+XJSNiQ9gVtS0pZD04Cl+
5Fc+L2h9qwxkitrXgyaOnlvJwEEu5flq/3nSNb7rYbVhSpzJudNX7P7aOKTVldbi
ChykFOpXdg7Vk9pELH2pLVIF706SnOKkl/rPJz9hmkw6S1ZmP45tnYECgYEAxw55
de+Kw5MJNpQN1B7Q71vudJSs0TrCnxqeR75mOEjphxJtam7Vre6qCR91PAGU+FFx
w3GxD/tnSEVjZG6pHQ8DY5ljq2BG9K3g03HNwDT3qJfRCPyZRWIC29JNY2Y4Spav
VzyKeGRkSkSRuKoE92nm+2Pxt9g3527a3WDLd+sCgYBxAaUvE6x/5cNYJVOuhBTv
5PpxEEUQoGPsrmvkRcanZ+9UpZBZv4r8O1fPWZgjOjAqrcTifAYOi0ClgxRaGeoG
AgV5iE1rVWuDd9e5zWnjsgENJ4kNYTR+QlNtQp2sA3InASWjQ2YQZZOfowIvQAxB
8Nn5v/ct3t18m5gp/AcgOQ==
-----END PRIVATE KEY-----
',
  ),
);