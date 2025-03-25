<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ResetDesktopsRequest extends Model
{
    /**
     * @description The ID of the cloud computer share.
     *
     *   If you specify `DesktopId`, ignore `DesktopGroupId`.
     *   If you leave `DesktopId` empty, the system obtains the IDs of all cloud computers within the share specified by `DesktopGroupId`.``
     *
     * @example dg-07if7qsxoxkb6****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The IDs of the cloud computer shares.
     *
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @description The IDs of the cloud computers. You can specify the IDs of 1 to 100 cloud computers.
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
     * @description The billing method of the cloud computer share.
     *
     * >  This parameter takes effect when you reset a cloud computer share. If you leave this parameter empty, all cloud computers in that share are reset.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/436773.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The reset scope. You can configure this parameter to reset the image or cloud computer.
     *
     * Valid values:
     *
     *   ALL (default): resets the image and cloud computer.
     *   IMAGE: resets only the image.
     *
     * @example ALL
     *
     * @var string
     */
    public $resetScope;

    /**
     * @description The disk reset type.
     *
     * Valid values:
     *
     *   0: does not reset disks.
     *   1: resets only the system disk.
     *   2: resets only the user disk.
     *   3: resets the system disk and the user disk.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $resetType;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'desktopId' => 'DesktopId',
        'imageId' => 'ImageId',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'resetScope' => 'ResetScope',
        'resetType' => 'ResetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupIds) {
            $res['DesktopGroupIds'] = $this->desktopGroupIds;
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
        if (null !== $this->resetScope) {
            $res['ResetScope'] = $this->resetScope;
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
        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = $map['DesktopGroupIds'];
            }
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
        if (isset($map['ResetScope'])) {
            $model->resetScope = $map['ResetScope'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        return $model;
    }
}
