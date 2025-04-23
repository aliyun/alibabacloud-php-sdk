<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases\sqlInstances;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases\tables;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases\templates;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ResultDatabasesFunctionsValue;

class databases extends Model
{
    /**
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
        'database' => 'database',
        'functions' => 'functions',
        'sqlInstances' => 'sqlInstances',
        'tables' => 'tables',
        'templates' => 'templates',
    ];

    public function validate()
    {
        if (\is_array($this->functions)) {
            Model::validateArray($this->functions);
        }
        if (\is_array($this->sqlInstances)) {
            Model::validateArray($this->sqlInstances);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['functions'] = [];
                foreach ($this->functions as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['functions'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['functions'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->sqlInstances) {
            if (\is_array($this->sqlInstances)) {
                $res['sqlInstances'] = [];
                $n1 = 0;
                foreach ($this->sqlInstances as $item1) {
                    $res['sqlInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['templates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                foreach ($map['functions'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->functions[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->functions[$key1][$n2++] = ResultDatabasesFunctionsValue::fromMap($item2);
                        }
                    }
                }
            }
        }

        if (isset($map['sqlInstances'])) {
            if (!empty($map['sqlInstances'])) {
                $model->sqlInstances = [];
                $n1 = 0;
                foreach ($map['sqlInstances'] as $item1) {
                    $model->sqlInstances[$n1++] = sqlInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['templates'] as $item1) {
                    $model->templates[$n1++] = templates::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
