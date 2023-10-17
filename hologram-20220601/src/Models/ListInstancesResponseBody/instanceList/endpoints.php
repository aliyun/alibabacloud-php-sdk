<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description Indicates whether the endpoint is enabled.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The endpoint.
     *
     * @example hgpostcn-cn-aaab9ad2d8fb-cn-hangzhou-internal.hologres.aliyuncs.com:80
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The network type.
     *
     * Valid values:
     *
     *   VPCSingleTunnel
     *
     * .
     *
     *   Intranet
     *
     * <!-- -->
     *
     *   VPCAnyTunnel
     *
     * .
     *
     *   Internet
     *
     * .
     * @example Internet
     *
     * @var string
     */
    public $type;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-wz9oap28raidjevhuszg4
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf6mrahzyu7uorlqqpz5f
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the VPC to which the instance belongs.
     *
     * @example hgpostcn-cn-wwo3665tx004-frontend-st
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'enabled'       => 'Enabled',
        'endpoint'      => 'Endpoint',
        'type'          => 'Type',
        'vSwitchId'     => 'VSwitchId',
        'vpcId'         => 'VpcId',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
