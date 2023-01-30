<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetInfoResponseBody;

use AlibabaCloud\Tea\Model;

class datasetInfo extends Model
{
    /**
     * @description The creation time (UTC) of the dataset.
     *
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the dataset.
     *
     * @example 62b91a790a693238********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The name of the dataset.
     *
     * @example DatasetName
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The type of the dataset. Valid values:
     *
     *   JWT_BLOCKING: a JSON Web Token (JWT) blacklist
     *   IP_WHITELIST_CIDR : an IP address whitelist
     *   PARAMETER_ACCESS : parameter-based access control
     *
     * @example JWT_BLOCKING
     *
     * @var string
     */
    public $datasetType;

    /**
     * @description The last modification time (UTC) of the dataset.
     *
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'datasetId'    => 'DatasetId',
        'datasetName'  => 'DatasetName',
        'datasetType'  => 'DatasetType',
        'modifiedTime' => 'ModifiedTime',
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
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasetInfo
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
