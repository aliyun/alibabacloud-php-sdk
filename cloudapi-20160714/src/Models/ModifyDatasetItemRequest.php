<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatasetItemRequest extends Model
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
     * @description The ID of the data entry.
     *
     * @example 5045****
     *
     * @var string
     */
    public $datasetItemId;

    /**
     * @description The description of the data entry. The description cannot exceed 180 characters in length.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time in UTC when the data entry expires. The time is in the **yyyy-MM-ddTHH:mm:ssZ** format.
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
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'datasetItemId' => 'DatasetItemId',
        'description'   => 'Description',
        'expiredTime'   => 'ExpiredTime',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->datasetItemId) {
            $res['DatasetItemId'] = $this->datasetItemId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatasetItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
