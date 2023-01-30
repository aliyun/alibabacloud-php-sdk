<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetItemRequest extends Model
{
    /**
     * @description The ID of the dataset.
     *
     * @example a25a6589b2584ff490e891cc********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The description of the data entry. The description cannot be more than 180 characters in length.
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
     * @var string
     */
    public $securityToken;

    /**
     * @description The value of the data entry. The value corresponds to the dataset type.
     *
     * @example 106.43.XXX.XXX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'description'   => 'Description',
        'expiredTime'   => 'ExpiredTime',
        'securityToken' => 'SecurityToken',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
