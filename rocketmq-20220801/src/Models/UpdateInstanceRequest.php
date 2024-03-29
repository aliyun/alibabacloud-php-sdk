<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\aclInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\productInfo;
use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var aclInfo
     */
    public $aclInfo;

    /**
     * @description The updated name of the instance.
     *
     * @example test_instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The updated network information about the instance.
     *
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @description Additional configurations of the instance.
     *
     * @var productInfo
     */
    public $productInfo;

    /**
     * @description The updated description of the instance.
     *
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'aclInfo'      => 'aclInfo',
        'instanceName' => 'instanceName',
        'networkInfo'  => 'networkInfo',
        'productInfo'  => 'productInfo',
        'remark'       => 'remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclInfo) {
            $res['aclInfo'] = null !== $this->aclInfo ? $this->aclInfo->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toMap() : null;
        }
        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclInfo'])) {
            $model->aclInfo = aclInfo::fromMap($map['aclInfo']);
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['networkInfo'])) {
            $model->networkInfo = networkInfo::fromMap($map['networkInfo']);
        }
        if (isset($map['productInfo'])) {
            $model->productInfo = productInfo::fromMap($map['productInfo']);
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
