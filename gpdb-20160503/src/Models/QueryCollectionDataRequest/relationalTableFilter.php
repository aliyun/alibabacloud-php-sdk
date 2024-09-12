<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;

use AlibabaCloud\Tea\Model;

class relationalTableFilter extends Model
{
    /**
     * @example doc_id
     *
     * @var string
     */
    public $collectionMetadataField;

    /**
     * @example tags @> ARRAY[\\"art\\"]
     *
     * @var string
     */
    public $condition;

    /**
     * @example id
     *
     * @var string
     */
    public $tableField;

    /**
     * @example my_rds_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'collectionMetadataField' => 'CollectionMetadataField',
        'condition'               => 'Condition',
        'tableField'              => 'TableField',
        'tableName'               => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return relationalTableFilter
     */
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
