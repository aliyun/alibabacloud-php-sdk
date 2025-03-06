<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemInfoResponseBody;

use AlibabaCloud\Tea\Model;

class datasetItemInfo extends Model
{
    /**
     * @description The creation time (UTC) of the data entry.
     *
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the dataset.
     *
     * @example 626238665db4a5140eea3e40********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The ID of the data entry.
     *
     * @example 5045****
     *
     * @var string
     */
    public $datasetItemId;

    /**
     * @description The description of the data entry.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time in UTC when the data entry expires. The time is in the **yyyy-MM-ddTHH:mm:ssZ** format. If this parameter is empty, the data entry does not expire.
     *
     * @example 2022-09-22T12:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The last modification time (UTC) of the data entry.
     *
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The value of the data entry.
     *
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
     * @return datasetItemInfo
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
