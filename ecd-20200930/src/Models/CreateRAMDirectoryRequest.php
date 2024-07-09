<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateRAMDirectoryRequest extends Model
{
    /**
     * @description The method in which the cloud computer is connected.
     *
     * Valid values:
     *
     *   VPC
     *
     * <!-- -->
     *
     *   Internet (default)
     *
     * <!-- -->
     *
     *   Any
     *
     * <!-- -->
     * @example Internet
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The directory name. The name must be 2 to 255 characters in length. It must start with a letter but cannot start with `http://` or `https://`. The name can contain digits, colons (:), underscores (_), and hyphens (-).
     *
     * This parameter is required.
     * @example testDirectoryName
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description Specifies whether to grant the local administrator permissions to users that are authorized to use cloud computers in the office network.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
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
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The vSwitch IDs. You can configure only one vSwitch.
     *
     * This parameter is required.
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
