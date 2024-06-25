<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases\sqlInstances;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases\tables;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases\templates;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ResultDatabasesFunctionsValue;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @example general
     *
     * @var string
     */
    public $database;

    /**
     * @var ResultDatabasesFunctionsValue[][]
     */
    public $functions;

    /**
     * @var sqlInstances[]
     */
    public $sqlInstances;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'database'     => 'database',
        'functions'    => 'functions',
        'sqlInstances' => 'sqlInstances',
        'tables'       => 'tables',
        'templates'    => 'templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->functions) {
            $res['functions'] = $this->functions;
        }
        if (null !== $this->sqlInstances) {
            $res['sqlInstances'] = [];
            if (null !== $this->sqlInstances && \is_array($this->sqlInstances)) {
                $n = 0;
                foreach ($this->sqlInstances as $item) {
                    $res['sqlInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tables) {
            $res['tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templates) {
            $res['templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['functions'])) {
            $model->functions = $map['functions'];
        }
        if (isset($map['sqlInstances'])) {
            if (!empty($map['sqlInstances'])) {
                $model->sqlInstances = [];
                $n                   = 0;
                foreach ($map['sqlInstances'] as $item) {
                    $model->sqlInstances[$n++] = null !== $item ? sqlInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
