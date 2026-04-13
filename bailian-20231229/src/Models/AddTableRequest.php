<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddTableRequest\tableColumns;

class AddTableRequest extends Model
{
    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var tableColumns[]
     */
    public $tableColumns;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'connectorId' => 'ConnectorId',
        'tableColumns' => 'TableColumns',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->tableColumns)) {
            Model::validateArray($this->tableColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->tableColumns) {
            if (\is_array($this->tableColumns)) {
                $res['TableColumns'] = [];
                $n1 = 0;
                foreach ($this->tableColumns as $item1) {
                    $res['TableColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['TableColumns'])) {
            if (!empty($map['TableColumns'])) {
                $model->tableColumns = [];
                $n1 = 0;
                foreach ($map['TableColumns'] as $item1) {
                    $model->tableColumns[$n1] = tableColumns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
