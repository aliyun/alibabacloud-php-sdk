<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddTableShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $tableColumnsShrink;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'connectorId' => 'ConnectorId',
        'tableColumnsShrink' => 'TableColumns',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->tableColumnsShrink) {
            $res['TableColumns'] = $this->tableColumnsShrink;
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
            $model->tableColumnsShrink = $map['TableColumns'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
