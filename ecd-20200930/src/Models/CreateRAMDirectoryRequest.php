<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateRAMDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $desktopAccessType;
    /**
     * @var string
     */
    public $directoryName;
    /**
     * @var bool
     */
    public $enableAdminAccess;
    /**
     * @var bool
     */
    public $enableInternetAccess;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        if (\is_array($this->vSwitchId)) {
            Model::validateArray($this->vSwitchId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vSwitchId)) {
                $res['VSwitchId'] = [];
                $n1               = 0;
                foreach ($this->vSwitchId as $item1) {
                    $res['VSwitchId'][$n1++] = $item1;
                }
            }
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
                $model->vSwitchId = [];
                $n1               = 0;
                foreach ($map['VSwitchId'] as $item1) {
                    $model->vSwitchId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
