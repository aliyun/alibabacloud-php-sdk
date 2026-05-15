<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class ExecuteStatementRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $maxBytes;

    /**
     * @var int
     */
    public $maxRows;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var int
     */
    public $queryTimeout;

    /**
     * @var string
     */
    public $sql;
    protected $_name = [
        'dbName' => 'dbName',
        'maxBytes' => 'maxBytes',
        'maxRows' => 'maxRows',
        'parameters' => 'parameters',
        'queryTimeout' => 'queryTimeout',
        'sql' => 'sql',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->maxBytes) {
            $res['maxBytes'] = $this->maxBytes;
        }

        if (null !== $this->maxRows) {
            $res['maxRows'] = $this->maxRows;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryTimeout) {
            $res['queryTimeout'] = $this->queryTimeout;
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
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
        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['maxBytes'])) {
            $model->maxBytes = $map['maxBytes'];
        }

        if (isset($map['maxRows'])) {
            $model->maxRows = $map['maxRows'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['queryTimeout'])) {
            $model->queryTimeout = $map['queryTimeout'];
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        return $model;
    }
}
