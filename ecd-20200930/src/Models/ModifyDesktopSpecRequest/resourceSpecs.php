<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecRequest;

use AlibabaCloud\Tea\Model;

class resourceSpecs extends Model
{
    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-4543qyik164a4****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The target size of the system disk. Valid values: 80-500 GiB. The value must be a multiple of 10.
     *
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The target size of the data disk. Valid values: 80-500 GiB. The value must be a multiple of 10.
     *
     * @example 20
     *
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'desktopId'       => 'DesktopId',
        'rootDiskSizeGib' => 'RootDiskSizeGib',
        'userDiskSizeGib' => 'UserDiskSizeGib',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
