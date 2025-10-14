<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class dataSetRecords extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSetId;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var string
     */
    public $dataSetRecordId;

    /**
     * @var string
     */
    public $dataSetRecordValues;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSetId' => 'DataSetId',
        'dataSetName' => 'DataSetName',
        'dataSetRecordId' => 'DataSetRecordId',
        'dataSetRecordValues' => 'DataSetRecordValues',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSetId) {
            $res['DataSetId'] = $this->dataSetId;
        }

        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }

        if (null !== $this->dataSetRecordId) {
            $res['DataSetRecordId'] = $this->dataSetRecordId;
        }

        if (null !== $this->dataSetRecordValues) {
            $res['DataSetRecordValues'] = $this->dataSetRecordValues;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSetId'])) {
            $model->dataSetId = $map['DataSetId'];
        }

        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }

        if (isset($map['DataSetRecordId'])) {
            $model->dataSetRecordId = $map['DataSetRecordId'];
        }

        if (isset($map['DataSetRecordValues'])) {
            $model->dataSetRecordValues = $map['DataSetRecordValues'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
