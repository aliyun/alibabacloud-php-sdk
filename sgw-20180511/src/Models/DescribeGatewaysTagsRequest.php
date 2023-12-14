<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewaysTagsRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayIds;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $storageBundleId;

    /**
     * @var string
     */
    public $tagCategory;
    protected $_name = [
        'gatewayIds'      => 'GatewayIds',
        'securityToken'   => 'SecurityToken',
        'storageBundleId' => 'StorageBundleId',
        'tagCategory'     => 'TagCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayIds) {
            $res['GatewayIds'] = $this->gatewayIds;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }
        if (null !== $this->tagCategory) {
            $res['TagCategory'] = $this->tagCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewaysTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayIds'])) {
            $model->gatewayIds = $map['GatewayIds'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }
        if (isset($map['TagCategory'])) {
            $model->tagCategory = $map['TagCategory'];
        }

        return $model;
    }
}
