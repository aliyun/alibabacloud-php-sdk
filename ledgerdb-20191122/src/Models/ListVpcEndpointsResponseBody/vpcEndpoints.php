<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListVpcEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class vpcEndpoints extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $vpcEndpointId;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
        'vSwitchId'     => 'VSwitchId',
        'createTime'    => 'CreateTime',
        'address'       => 'Address',
        'vpcEndpointId' => 'VpcEndpointId',
        'memberId'      => 'MemberId',
        'ledgerId'      => 'LedgerId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->vpcEndpointId) {
            $res['VpcEndpointId'] = $this->vpcEndpointId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['VpcEndpointId'])) {
            $model->vpcEndpointId = $map['VpcEndpointId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
