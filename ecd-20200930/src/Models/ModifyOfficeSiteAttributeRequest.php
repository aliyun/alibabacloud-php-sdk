<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyOfficeSiteAttributeRequest extends Model
{
    /**
     * @description The method that you want to use to connect the Alibaba Cloud Workspace client to cloud desktops. Valid values:
     *
     *   INTERNET: connects the client to cloud desktops only over the Internet.
     *   VPC: connects the client to cloud desktops only over a VPC.
     *   Any: connects clients to cloud desktops over the Internet or a VPC. You can select a connection method based on your business requirements when you connect to a cloud desktop from the client.
     *
     * > VPC connections are established by using Alibaba Cloud PrivateLink. You can use PrivateLink for free. When you set this parameter to VPC or Any, PrivateLink is automatically activated.
     * @example INTERNET
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description This parameter is only applicable to a workspace of the convenience account type, which indicates whether to require two-factor verification when you log on to the client. If two-factor verification is enabled, the system checks whether security risks exist within the logon account when a convenience user logs on to the client. If risks are detected, the system sends a verification code to the email address that is associated with the account. Then, the convenience user can log on to the client only after the verification code is correctly entered.
     *
     * @example false
     *
     * @var bool
     */
    public $needVerifyLoginRisk;

    /**
     * @description This parameter is only applicable to a workspace of the convenience account type, which indicates whether to require device verification when you log on to the client. For a workspace of the enterprise Active Directory (AD) account type, the value of this parameter is empty.
     *
     * @example false
     *
     * @var bool
     */
    public $needVerifyZeroDevice;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-882398****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace. We recommend that you specify a name that is easy to identify. The name must be 2 to 255 characters in length. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter but cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopAccessType'    => 'DesktopAccessType',
        'enableAdminAccess'    => 'EnableAdminAccess',
        'needVerifyLoginRisk'  => 'NeedVerifyLoginRisk',
        'needVerifyZeroDevice' => 'NeedVerifyZeroDevice',
        'officeSiteId'         => 'OfficeSiteId',
        'officeSiteName'       => 'OfficeSiteName',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->needVerifyLoginRisk) {
            $res['NeedVerifyLoginRisk'] = $this->needVerifyLoginRisk;
        }
        if (null !== $this->needVerifyZeroDevice) {
            $res['NeedVerifyZeroDevice'] = $this->needVerifyZeroDevice;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOfficeSiteAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['NeedVerifyLoginRisk'])) {
            $model->needVerifyLoginRisk = $map['NeedVerifyLoginRisk'];
        }
        if (isset($map['NeedVerifyZeroDevice'])) {
            $model->needVerifyZeroDevice = $map['NeedVerifyZeroDevice'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
