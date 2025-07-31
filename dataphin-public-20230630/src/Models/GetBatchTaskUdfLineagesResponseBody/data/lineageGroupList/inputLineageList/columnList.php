<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList\inputLineageList;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @example varchar
     *
     * @var string
     */
    public $dataType;

    /**
     * @example xx
     *
     * @var string
     */
    public $description;

    /**
     * @example c011
     *
     * @var string
     */
    public $id;

    /**
     * @example c011
     *
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $partitionKey;

    /**
     * @var bool
     */
    public $primaryKey;
    protected $_name = [
        'dataType' => 'DataType',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'partitionKey' => 'PartitionKey',
        'primaryKey' => 'PrimaryKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->partitionKey) {
            $res['PartitionKey'] = $this->partitionKey;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PartitionKey'])) {
            $model->partitionKey = $map['PartitionKey'];
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        return $model;
    }
}
