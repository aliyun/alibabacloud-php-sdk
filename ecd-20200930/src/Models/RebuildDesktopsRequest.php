<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RebuildDesktopsRequest extends Model
{
    /**
     * @description The IDs of the cloud desktops.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The ID of the new image.
     *
     * @example m-84mztzatmlnys****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The operation type on the data disk.
     *
     * > For cloud desktops that do not have data disks, when you call this operation, you do not need to configure this parameter.
     *
     *   Cloud desktops do not have data disks\
     * The values that you configured have no impacts.
     *
     *   Cloud desktops have data disks
     *
     * 1.  If the OS of the cloud desktop is the same as the OS of a destination image:
     *
     *   The value replace indicates that the data disk of the cloud desktop is replaced.
     *   If you do not specify this parameter, the data disk of the cloud desktop is retained.
     *
     * 2.  If the OS of the cloud desktop is the different from the OS of a destination image:
     *
     *   The value replace indicates that the data disk of the cloud desktop is replaced.
     *   If you do not specify this parameter, the data disk of the cloud desktop is cleared.
     *
     * @example replace
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'   => 'DesktopId',
        'imageId'     => 'ImageId',
        'operateType' => 'OperateType',
        'regionId'    => 'RegionId',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebuildDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
