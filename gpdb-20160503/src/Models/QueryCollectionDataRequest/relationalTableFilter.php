<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;

use AlibabaCloud\Dara\Model;

class relationalTableFilter extends Model
{
    /**
     * @var string
     */
    public $collectionMetadataField;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $tableField;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'collectionMetadataField' => 'CollectionMetadataField',
        'condition' => 'Condition',
        'tableField' => 'TableField',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionMetadataField) {
            $res['CollectionMetadataField'] = $this->collectionMetadataField;
        }

        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->tableField) {
            $res['TableField'] = $this->tableField;
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
        if (isset($map['CollectionMetadataField'])) {
            $model->collectionMetadataField = $map['CollectionMetadataField'];
        }

        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['TableField'])) {
            $model->tableField = $map['TableField'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
