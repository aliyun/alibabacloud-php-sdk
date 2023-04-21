<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ResetDesktopsRequest extends Model
{
    /**
     * @description The ID of the desktop group. If you specify the `DesktopId` parameter, ignore the `DesktopGroupId` parameter. If you do not specify the `DesktopId` parameter, specify the `DesktopGroupId` parameter in the call to request all IDs of the cloud desktops in the specified desktop group.``
     *
     * @example dg-07if7qsxoxkb6****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the cloud desktops. You can specify 1 to 100 cloud desktop IDs.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The ID of the image.
     *
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The billing method.
     *
     * > This parameter is available only when you reset desktop groups. If you leave this parameter empty, all cloud desktops in the specified desktop group are reset, regardless of how the cloud desktops are billed.
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~436773~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the disk that you want to reset.
     *
     * @example 1
     *
     * @var string
     */
    public $resetType;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'desktopId'      => 'DesktopId',
        'imageId'        => 'ImageId',
        'payType'        => 'PayType',
        'regionId'       => 'RegionId',
        'resetType'      => 'ResetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        return $model;
    }
}
