<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RebuildDesktopsRequest extends Model
{
    /**
     * @description The IDs of the cloud computers. You can specify 1 to 20 IDs.
     *
     * This parameter is required.
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
     * @var string
     */
    public $language;

    /**
     * @description The operation type on the data disk.
     *
     * >  This parameter is empty by default regardless of whether data disks are attached to the cloud computer.
     *
     *   No data disks are attached to the cloud computer:\\
     * No operation is performed on the data disks of the cloud computer regardless of the value of this parameter.
     *
     *   Data disks are attached to the cloud computer:
     *
     * 1.  The OS of the cloud computer is the same as the OS of the destination image:
     *
     *   If you set the OperateType parameter to `replace`, the data in the data disks of the cloud computer is replaced.
     *   If you leave the OperateType parameter empty, the data in the data disks of the cloud computer is retained.
     *
     * 2.  The OS of the cloud computer is different from the OS of the destination image:
     *
     *   If you set the OperateType parameter to `replace`, the data in the data disks of the cloud computer is replaced.
     *   If you leave the OperateType parameter empty, the data in the data disks of the cloud computer is cleared.
     *
     * @example replace
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'   => 'DesktopId',
        'imageId'     => 'ImageId',
        'language'    => 'Language',
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
        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
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
