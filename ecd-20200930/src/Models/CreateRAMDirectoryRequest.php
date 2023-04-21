<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateRAMDirectoryRequest extends Model
{
    /**
     * @description The method that you use to connect clients to cloud desktops. Valid values:
     *
     *   Internet: connects clients to cloud desktops only over the Internet.
     *   VPC: connects clients to cloud desktops only over a VPC.
     *   Any: connects clients to cloud desktops over the Internet or a VPC. You can select a connection method when you connect clients to cloud desktops.
     *
     * > The VPC connection method is provided by Alibaba Cloud PrivateLink. You are not charged for PrivateLink. If you set this parameter to VPC or Any, PrivateLink is automatically activated.
     * @example Internet
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The name of the directory. The name must be 2 to 255 characters in length and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example testDirectoryName
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description Specifies whether to grant the permissions of the local administrator to the desktop users.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description Specifies whether to enable the Internet access feature.
     *
     * @example false
     *
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of vSwitches. You can configure only one vSwitch.
     *
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'desktopAccessType'    => 'DesktopAccessType',
        'directoryName'        => 'DirectoryName',
        'enableAdminAccess'    => 'EnableAdminAccess',
        'enableInternetAccess' => 'EnableInternetAccess',
        'regionId'             => 'RegionId',
        'vSwitchId'            => 'VSwitchId',
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
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRAMDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
