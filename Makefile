help:
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'
.PHONY: help

test: ## Run Whole Test Suit
	rm -rf var/cache/* && \
	bin/console doctrine:schema:update --force && \
	phpunit
.PHONY: test
