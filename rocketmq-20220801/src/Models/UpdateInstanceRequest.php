<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\aclInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\productInfo;

class UpdateInstanceRequest extends Model
{
    /**
     * @var aclInfo
     */
    public $aclInfo;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'aclInfo' => 'aclInfo',
        'instanceName' => 'instanceName',
        'networkInfo' => 'networkInfo',
        'productInfo' => 'productInfo',
        'remark' => 'remark',
    ];

    public function validate()
    {
        if (null !== $this->aclInfo) {
            $this->aclInfo->validate();
        }
        if (null !== $this->networkInfo) {
            $this->networkInfo->validate();
        }
        if (null !== $this->productInfo) {
            $this->productInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclInfo) {
            $res['aclInfo'] = null !== $this->aclInfo ? $this->aclInfo->toArray($noStream) : $this->aclInfo;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toArray($noStream) : $this->networkInfo;
        }

        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toArray($noStream) : $this->productInfo;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
