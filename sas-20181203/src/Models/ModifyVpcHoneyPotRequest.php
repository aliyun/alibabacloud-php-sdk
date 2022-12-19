<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcHoneyPotRequest extends Model
{
    /**
     * @description Specifies whether to enable or disable the honeypot. Valid values:
     *
     *   **disable**
     *   **enable**
     *
     * @example disable
     *
     * @var string
     */
    public $honeyPotAction;

    /**
     * @description The ID of the virtual private cloud (VPC) on which the honeypot is deployed.
     *
     * >  You can call the [DescribeVpcHoneyPotList](~~DescribeVpcHoneyPotList~~) operation to query the IDs of VPCs.
     * @example vpc-d7o009q63fqy21r8u****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'honeyPotAction' => 'HoneyPotAction',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeyPotAction) {
            $res['HoneyPotAction'] = $this->honeyPotAction;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcHoneyPotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneyPotAction'])) {
            $model->honeyPotAction = $map['HoneyPotAction'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
