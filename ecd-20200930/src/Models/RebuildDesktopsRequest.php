<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RebuildDesktopsRequest extends Model
{
    /**
     * @description The cloud computer IDs. You can specify the IDs of 1 to 20 cloud computers.
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
     * @description The OS language. Only system images are supported, and Linux cloud computers support only English.
     *
     * Valid values:
     *
     *   en-US: English
     *   zh-HK: Traditional Chinese (Hong Kong, China)
     *   zh-CN: Simplified Chinese
     *   ja-JP: Japanese
     *
     * @example en-US
     *
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
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the regions supported by Elastic Desktop Service (EDS).
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
