<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateStorageBundleRequest extends Model
{
    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $backendBucketRegionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example alex-123***
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'backendBucketRegionId' => 'BackendBucketRegionId',
        'description'           => 'Description',
        'name'                  => 'Name',
        'securityToken'         => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendBucketRegionId) {
            $res['BackendBucketRegionId'] = $this->backendBucketRegionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStorageBundleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendBucketRegionId'])) {
            $model->backendBucketRegionId = $map['BackendBucketRegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
