<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpnGatewayAttributeResponseBody extends Model
{
    /**
     * @description Indicates whether BGP routes are automatically advertised to the VPC. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoPropagate;

    /**
     * @description The payment status of the VPN gateway. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the VPN gateway was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1492753580000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the VPN gateway.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The second IP address assigned by the system to create an IPsec-VPN connection.
     *
     * This parameter is returned only when the VPN gateway supports the dual-tunnel mode.
     * @example 116.11.XX.XX
     *
     * @var string
     */
    public $disasterRecoveryInternetIp;

    /**
     * @description The ID of the second vSwitch associated with the VPN gateway.
     *
     * This parameter is returned only when the VPN gateway supports the dual-tunnel mode.
     * @example vsw-p0w95ql6tmr2ludkt****
     *
     * @var string
     */
    public $disasterRecoveryVSwitchId;

    /**
     * @description Indicates whether BGP is enabled for the VPN gateway. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableBgp;

    /**
     * @description The time when the VPN gateway expires. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1495382400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description *   If the VPN gateway supports IPsec-VPN connections in single-tunnel mode, the address is the IP address of the VPN gateway and can be used to create an IPsec-VPN connection or an SSL-VPN connection.
     *
     *   If the VPN gateway supports IPsec-VPN connections in dual-tunnel mode, the address is the first IP address used to create an IPsec-VPN connection. The address cannot be used to create an SSL-VPN connection.
     *
     * If the VPN gateway supports IPsec-VPN connections in dual-tunnel mode, the system assigns two IP addresses to the VPN gateway to create two encrypted tunnels.
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The IP address of the VPN gateway.
     *
     * This parameter is returned only when the VPN gateway is a private VPN gateway and supports only the single-tunnel mode.
     * @example 172.27.30.24
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The name of the VPN gateway.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B457
     *
     * @var string
     */
    public $requestId;

    /**
     * @description VPN网关实例所属的资源组ID。
     *
     * 您可以调用[ListResourceGroups](~~158855~~)接口查询资源组信息。
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The maximum bandwidth of the VPN gateway. Unit: Mbit/s.
     *
     * @example 5M
     *
     * @var string
     */
    public $spec;

    /**
     * @description The IP address of the SSL-VPN connection.
     *
     * This parameter is returned only when the VPN gateway is a public VPN gateway and supports only the single-tunnel mode. In addition, the VPN gateway must have the SSL-VPN feature enabled.
     * @example 116.33.XX.XX
     *
     * @var string
     */
    public $sslVpnInternetIp;

    /**
     * @description The status of the VPN gateway. Valid values:
     *
     *   **init**
     *   **provisioning**
     *   **active**
     *   **updating**
     *   **deleting**
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch associated with the VPN gateway.
     *
     * @example vsw-bp1y9ovl1cu9ou4tv****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which the VPN gateway belongs.
     *
     * @example vpc-bp1ub1yt9cvakoel****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'autoPropagate'              => 'AutoPropagate',
        'businessStatus'             => 'BusinessStatus',
        'createTime'                 => 'CreateTime',
        'description'                => 'Description',
        'disasterRecoveryInternetIp' => 'DisasterRecoveryInternetIp',
        'disasterRecoveryVSwitchId'  => 'DisasterRecoveryVSwitchId',
        'enableBgp'                  => 'EnableBgp',
        'endTime'                    => 'EndTime',
        'internetIp'                 => 'InternetIp',
        'intranetIp'                 => 'IntranetIp',
        'name'                       => 'Name',
        'requestId'                  => 'RequestId',
        'resourceGroupId'            => 'ResourceGroupId',
        'spec'                       => 'Spec',
        'sslVpnInternetIp'           => 'SslVpnInternetIp',
        'status'                     => 'Status',
        'vSwitchId'                  => 'VSwitchId',
        'vpcId'                      => 'VpcId',
        'vpnGatewayId'               => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPropagate) {
            $res['AutoPropagate'] = $this->autoPropagate;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disasterRecoveryInternetIp) {
            $res['DisasterRecoveryInternetIp'] = $this->disasterRecoveryInternetIp;
        }
        if (null !== $this->disasterRecoveryVSwitchId) {
            $res['DisasterRecoveryVSwitchId'] = $this->disasterRecoveryVSwitchId;
        }
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->sslVpnInternetIp) {
            $res['SslVpnInternetIp'] = $this->sslVpnInternetIp;
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
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnGatewayAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPropagate'])) {
            $model->autoPropagate = $map['AutoPropagate'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisasterRecoveryInternetIp'])) {
            $model->disasterRecoveryInternetIp = $map['DisasterRecoveryInternetIp'];
        }
        if (isset($map['DisasterRecoveryVSwitchId'])) {
            $model->disasterRecoveryVSwitchId = $map['DisasterRecoveryVSwitchId'];
        }
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SslVpnInternetIp'])) {
            $model->sslVpnInternetIp = $map['SslVpnInternetIp'];
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
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
