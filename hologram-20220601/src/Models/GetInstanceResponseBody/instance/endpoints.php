<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The endpoint. This parameter is returned if both the AnyTunnel and SingleTunnel modes are enabled for an instance, and the instance is switched from the AnyTunnel mode to the SingleTunnel mode. In this case, two endpoints are returned.
     *
     * @example hgprecn-cn-uqm362o1b001-cn-hangzhou-internal.hologres.aliyuncs.com:80
     *
     * @var string
     */
    public $alternativeEndpoints;

    /**
     * @description Indicates whether the network is enabled.
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
     * @example hgprecn-cn-uqm362o1b001-cn-hangzhou-internal.hologres.aliyuncs.com:80
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
     * .
     *
     *   VPCAnyTunnel
     *
     * <!-- -->
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
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1jqwp2ys6kp7tc9t983
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf66jjber3hgvwhki3wna
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of VPC to which the instance belongs.
     *
     * @example hgprecn-cn-uqm362o1b001-frontend-st
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'alternativeEndpoints' => 'AlternativeEndpoints',
        'enabled'              => 'Enabled',
        'endpoint'             => 'Endpoint',
        'type'                 => 'Type',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'vpcInstanceId'        => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alternativeEndpoints) {
            $res['AlternativeEndpoints'] = $this->alternativeEndpoints;
        }
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
        if (isset($map['AlternativeEndpoints'])) {
            $model->alternativeEndpoints = $map['AlternativeEndpoints'];
        }
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
