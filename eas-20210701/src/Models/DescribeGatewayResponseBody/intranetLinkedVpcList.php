<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class intranetLinkedVpcList extends Model
{
    /**
     * @example 192.168.10.11
     *
     * @var string
     */
    public $ip;

    /**
     * @example sg-2ze4pgstgszvgq******
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-bp1txzxsdck43pp******
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1g11zvka6zr3i******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ip'              => 'Ip',
        'securityGroupId' => 'SecurityGroupId',
        'status'          => 'Status',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intranetLinkedVpcList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
