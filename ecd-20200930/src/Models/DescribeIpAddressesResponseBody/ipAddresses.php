<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeIpAddressesResponseBody;

use AlibabaCloud\Dara\Model;

class ipAddresses extends Model
{
    /**
     * @var bool
     */
    public $createByWuying;

    /**
     * @var string
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $eipId;

    /**
     * @var string
     */
    public $eipStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'createByWuying' => 'CreateByWuying',
        'eipAddress' => 'EipAddress',
        'eipId' => 'EipId',
        'eipStatus' => 'EipStatus',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createByWuying) {
            $res['CreateByWuying'] = $this->createByWuying;
        }

        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }

        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }

        if (null !== $this->eipStatus) {
            $res['EipStatus'] = $this->eipStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['CreateByWuying'])) {
            $model->createByWuying = $map['CreateByWuying'];
        }

        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }

        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }

        if (isset($map['EipStatus'])) {
            $model->eipStatus = $map['EipStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
