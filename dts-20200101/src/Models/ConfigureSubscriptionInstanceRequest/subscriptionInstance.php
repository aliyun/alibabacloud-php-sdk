<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest;

use AlibabaCloud\Tea\Model;

class subscriptionInstance extends Model
{
    /**
     * @description The ID of the VPC in which the change tracking instance is deployed.
     *
     * >  This parameter is required only when the **SubscriptionInstanceNetworkType** parameter is set to **vpc**.
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch in the specified VPC.
     *
     * >  This parameter is required only when the **SubscriptionInstanceNetworkType** parameter is set to **vpc**.
     * @example vsw-bp10df3mxae6lpmku****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'VPCId'     => 'VPCId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
