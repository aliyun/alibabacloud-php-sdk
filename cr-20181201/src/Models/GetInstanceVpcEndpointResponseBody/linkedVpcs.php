<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class linkedVpcs extends Model
{
    /**
     * @description Indicates whether the default ACL is used.
     *
     * @example false
     *
     * @var bool
     */
    public $defaultAccess;

    /**
     * @description IP address.
     *
     * @example 192.168.10.11
     *
     * @var string
     */
    public $ip;

    /**
     * @description The status of the VPC. Valid values:
     *
     *   `CREATING`: The VPC is being created.
     *   `RUNNING`: The VPC is running.
     *
     * @example CREATING
     *
     * @var string
     */
    public $status;

    /**
     * @description VPC ID
     *
     * @example vpc-uf6aamu2nomfr1thd****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-uf62m5vmxl2e72dk7****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'defaultAccess' => 'DefaultAccess',
        'ip'            => 'Ip',
        'status'        => 'Status',
        'vpcId'         => 'VpcId',
        'vswitchId'     => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultAccess) {
            $res['DefaultAccess'] = $this->defaultAccess;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return linkedVpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultAccess'])) {
            $model->defaultAccess = $map['DefaultAccess'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
