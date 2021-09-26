<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;

use AlibabaCloud\Tea\Model;

class instanceConnections extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $instanceConnectionBandwidth;

    /**
     * @var string
     */
    public $instanceConnectionDomain;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'vpcId'                       => 'VpcId',
        'instanceConnectionBandwidth' => 'InstanceConnectionBandwidth',
        'instanceConnectionDomain'    => 'InstanceConnectionDomain',
        'securityGroupIds'            => 'SecurityGroupIds',
        'vswitchIds'                  => 'VswitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->instanceConnectionBandwidth) {
            $res['InstanceConnectionBandwidth'] = $this->instanceConnectionBandwidth;
        }
        if (null !== $this->instanceConnectionDomain) {
            $res['InstanceConnectionDomain'] = $this->instanceConnectionDomain;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->vswitchIds) {
            $res['VswitchIds'] = $this->vswitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['InstanceConnectionBandwidth'])) {
            $model->instanceConnectionBandwidth = $map['InstanceConnectionBandwidth'];
        }
        if (isset($map['InstanceConnectionDomain'])) {
            $model->instanceConnectionDomain = $map['InstanceConnectionDomain'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['VswitchIds'])) {
            if (!empty($map['VswitchIds'])) {
                $model->vswitchIds = $map['VswitchIds'];
            }
        }

        return $model;
    }
}
