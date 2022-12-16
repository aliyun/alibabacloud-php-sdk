<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\productInfo;
use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @example test_instance
     *
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
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
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
