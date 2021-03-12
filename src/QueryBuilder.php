<?php


namespace App;


class QueryBuilder
{
    private string $query = "";


    public function select(array $fields = []): QueryBuilder
    {
        $this->query .= sprintf("SELECT %s", sizeof($fields) ? implode(',', $fields) : '*');
        return $this;
    }

    public function from(string $table): QueryBuilder
    {
        $this->query .= " FROM {$table} ";
        return $this;
    }

    public function where(array $conditions): QueryBuilder
    {
        $this->query .= sprintf("WHERE %s ", implode(" AND ", $conditions));

        return $this;
    }

    public function orWhere(array $conditions): QueryBuilder
    {
        $this->query .= sprintf("WHERE %s ", implode(" OR ", $conditions));

        return $this;
    }


    public function getQuery(): string
    {
        return $this->query;
    }

}