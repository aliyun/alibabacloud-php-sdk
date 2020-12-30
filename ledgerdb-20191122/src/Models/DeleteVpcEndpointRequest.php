<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class DeleteVpcEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcEndpointId;
    protected $_name = [
        'ledgerId'      => 'LedgerId',
        'vpcId'         => 'VpcId',
        'vSwitchId'     => 'VSwitchId',
        'vpcEndpointId' => 'VpcEndpointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcEndpointId) {
            $res['VpcEndpointId'] = $this->vpcEndpointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVpcEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcEndpointId'])) {
            $model->vpcEndpointId = $map['VpcEndpointId'];
        }

        return $model;
    }
}
