<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatasetItemRequest extends Model
{
    /**
     * @description The ID of the dataset.
     *
     * This parameter is required.
     * @example a25a6589b2584ff490e891cc********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The ID of the data entry.
     *
     * This parameter is required.
     * @example 5045****
     *
     * @var string
     */
    public $datasetItemId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'datasetItemId' => 'DatasetItemId',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDatasetItemRequest
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
