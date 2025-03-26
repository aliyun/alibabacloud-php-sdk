<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateSimpleOfficeSiteRequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $cenOwnerId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var bool
     */
    public $cloudBoxOfficeSite;

    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @var bool
     */
    public $needVerifyZeroDevice;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $verifyCode;

    /**
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'cenId' => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'cidrBlock' => 'CidrBlock',
        'cloudBoxOfficeSite' => 'CloudBoxOfficeSite',
        'desktopAccessType' => 'DesktopAccessType',
        'enableAdminAccess' => 'EnableAdminAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'needVerifyZeroDevice' => 'NeedVerifyZeroDevice',
        'officeSiteName' => 'OfficeSiteName',
        'regionId' => 'RegionId',
        'vSwitchId' => 'VSwitchId',
        'verifyCode' => 'VerifyCode',
        'vpcType' => 'VpcType',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchId)) {
            Model::validateArray($this->vSwitchId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vSwitchId)) {
                $res['VSwitchId'] = [];
                $n1 = 0;
                foreach ($this->vSwitchId as $item1) {
                    $res['VSwitchId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->vSwitchId = [];
                $n1 = 0;
                foreach ($map['VSwitchId'] as $item1) {
                    $model->vSwitchId[$n1++] = $item1;
                }
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
