<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateSimpleOfficeSiteRequest extends Model
{
    /**
     * @description The maximum public bandwidth. Value range: 10 to 200. Unit: Mbit/s. This parameter is available if you set `EnableInternetAccess` to `true`.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The Cloud Enterprise Network (CEN) instance ID.
     *
     * >  If you want end users to connect to cloud computers from WUYING clients over VPCs, you can attach the office network to a CEN instance. The CEN instance is the one that connects to your on-premises network over VPN Gateway or Express Connect.
     * @example cen-3gwy16dojz1m65****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the Cloud Enterprise Network (CEN) instance belongs.
     *
     * - If you specify the CenId parameter and the CEN instance that you specify for the CenId parameter belongs to another Alibaba Cloud account, enter the ID of the Alibaba Cloud account.
     * @example 118272523431****
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The IPv4 CIDR block that you want the office network to use in the virtual private cloud (VPC) of the office network. The system automatically creates a VPC for the office network based on the IPv4 CIDR block. We recommend that you set this parameter to one of the following CIDR blocks and their subnets:
     *
     *   `10.0.0.0/12` (subnet mask range: 12 to 14 bits)
     *   `172.16.0.0/12` (subnet mask range: 12 to 24 bits)
     *   `192.168.0.0/16` (subnet mask range: 16 to 24 bits)
     *
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description Specifies whether to create a CloudBox-based office network.
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
     * @example false
     *
     * @var bool
     */
    public $cloudBoxOfficeSite;

    /**
     * @description The method to connect to cloud computers from WUYING clients.
     *
     * >  The VPC connection depends on Alibaba Cloud PrivateLink. You can use PrivateLink for free. When you set this parameter to VPC or Any, PrivateLink is automatically activated.````
     * @example Internet
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description Specifies whether to grant the local administrator permissions to users that are authorized to use cloud computers in the office network.
     *
     * Valid values:
     *
     * true (default)
     * false
     *
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description Specifies whether to enable Internet access.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false (default)
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @description Specifies whether to enable trusted device verification.
     *
     * @example true
     *
     * @var bool
     */
    public $needVerifyZeroDevice;

    /**
     * @description The office network name. The name must be 2 to 255 characters in length. It can contain digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * @example TestOfficeSite_Simple
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the vSwitches that you want to specify in VPCs. This parameter is required only when you create CloudBox-based office networks.
     *
     * @var string[]
     */
    public $vSwitchId;

    /**
     * @description The verification code. If the CEN instance that you specify for the CenId parameter belongs to another Alibaba Cloud account, you must call the [SendVerifyCode](~~335132~~) operation to obtain the verification code.
     *
     * @example 123456
     *
     * @var string
     */
    public $verifyCode;

    /**
     * @description The network type of the office network.
     *
     * Valid values:
     *
     *   standard: advanced
     *   basic: basic
     *
     * @example standard
     *
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'cenId'                => 'CenId',
        'cenOwnerId'           => 'CenOwnerId',
        'cidrBlock'            => 'CidrBlock',
        'cloudBoxOfficeSite'   => 'CloudBoxOfficeSite',
        'desktopAccessType'    => 'DesktopAccessType',
        'enableAdminAccess'    => 'EnableAdminAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'needVerifyZeroDevice' => 'NeedVerifyZeroDevice',
        'officeSiteName'       => 'OfficeSiteName',
        'regionId'             => 'RegionId',
        'vSwitchId'            => 'VSwitchId',
        'verifyCode'           => 'VerifyCode',
        'vpcType'              => 'VpcType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->cloudBoxOfficeSite) {
            $res['CloudBoxOfficeSite'] = $this->cloudBoxOfficeSite;
        }
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->needVerifyZeroDevice) {
            $res['NeedVerifyZeroDevice'] = $this->needVerifyZeroDevice;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimpleOfficeSiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CloudBoxOfficeSite'])) {
            $model->cloudBoxOfficeSite = $map['CloudBoxOfficeSite'];
        }
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['NeedVerifyZeroDevice'])) {
            $model->needVerifyZeroDevice = $map['NeedVerifyZeroDevice'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = $map['VSwitchId'];
            }
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
