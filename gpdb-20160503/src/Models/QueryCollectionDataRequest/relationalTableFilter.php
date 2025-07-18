<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataRequest;

use AlibabaCloud\Tea\Model;

class relationalTableFilter extends Model
{
    /**
     * @description The Metadata field of the vector collection, used to associate with the fields in the vector table.
     *
     * @example doc_id
     *
     * @var string
     */
    public $collectionMetadataField;

    /**
     * @description The filtering condition for the relational table.
     *
     * @example tags @> ARRAY[\\"art\\"]
     *
     * @var string
     */
    public $condition;

    /**
     * @description The field in the relational table, used to associate with the Metadata field of the vector collection.
     *
     * @example id
     *
     * @var string
     */
    public $tableField;

    /**
     * @description The name of the relational table.
     *
     * @example my_rds_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'collectionMetadataField' => 'CollectionMetadataField',
        'condition' => 'Condition',
        'tableField' => 'TableField',
        'tableName' => 'TableName',
    ];

    public function validate() {}

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
