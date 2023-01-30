<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @description Dataset Name
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
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'datasetName'   => 'DatasetName',
        'datasetType'   => 'DatasetType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
