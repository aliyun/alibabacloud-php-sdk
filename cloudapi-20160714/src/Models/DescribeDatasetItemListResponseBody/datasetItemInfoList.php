<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemListResponseBody;

use AlibabaCloud\Tea\Model;

class datasetItemInfoList extends Model
{
    /**
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 4add6a61804e47858266883e********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example 5045****
     *
     * @var string
     */
    public $datasetItemId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-09-22T12:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 106.43.XXX.XXX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'createdTime'   => 'CreatedTime',
        'datasetId'     => 'DatasetId',
        'datasetItemId' => 'DatasetItemId',
        'description'   => 'Description',
        'expiredTime'   => 'ExpiredTime',
        'modifiedTime'  => 'ModifiedTime',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetItemId) {
            $res['DatasetItemId'] = $this->datasetItemId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasetItemInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetItemId'])) {
            $model->datasetItemId = $map['DatasetItemId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
