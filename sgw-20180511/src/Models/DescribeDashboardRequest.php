<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeDashboardRequest extends Model
{
    /**
     * @var string
     */
    public $backendBucketRegionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'backendBucketRegionId' => 'BackendBucketRegionId',
        'resourceGroupId'       => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDashboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendBucketRegionId'])) {
            $model->backendBucketRegionId = $map['BackendBucketRegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
