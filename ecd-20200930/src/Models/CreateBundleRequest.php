<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBundleRequest extends Model
{
    /**
     * @description The name of the desktop template.
     *
     * @example testBundleName
     *
     * @var string
     */
    public $bundleName;

    /**
     * @description The description of the desktop template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the cloud desktop. You can call the DescribeBundles operation to query the cloud desktop templates and obtain the supported desktop type from the value of the DesktopType parameter.
     *
     * >  You can select GPU-accelerated desktop types only when you use GPU-accelerated images.
     * @example ecd.basic.large
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the image.
     *
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The language of the OS. This parameter is available only for system images. Valid values:
     *
     *   zh-CN: Simplified Chinese
     *   zh-HK: Traditional Chinese (Hong Kong)
     *   en-US: English
     *   ja-JP: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The performance level (PL) of the system disk. If the cloud desktop type is Graphics or High Frequency, you can set the PL of the system disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * For more information about the differences between disks at different PLs, see [Enhanced SSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * The value of this parameter must be consistent with the system disk size supported by the cloud desktop type. For more information, see [Cloud desktop types](~~188609~~).
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The PL of the data disk. If the cloud desktop type is Graphics or High Frequency, you can set the PL of the data disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * For more information about the differences between disks at different PLs, see [Enhanced SSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @example 70
     *
     * @var int[]
     */
    public $userDiskSizeGib;
    protected $_name = [
        'bundleName'               => 'BundleName',
        'description'              => 'Description',
        'desktopType'              => 'DesktopType',
        'imageId'                  => 'ImageId',
        'language'                 => 'Language',
        'regionId'                 => 'RegionId',
        'rootDiskPerformanceLevel' => 'RootDiskPerformanceLevel',
        'rootDiskSizeGib'          => 'RootDiskSizeGib',
        'userDiskPerformanceLevel' => 'UserDiskPerformanceLevel',
        'userDiskSizeGib'          => 'UserDiskSizeGib',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rootDiskPerformanceLevel) {
            $res['RootDiskPerformanceLevel'] = $this->rootDiskPerformanceLevel;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->userDiskPerformanceLevel) {
            $res['UserDiskPerformanceLevel'] = $this->userDiskPerformanceLevel;
        }
        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBundleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RootDiskPerformanceLevel'])) {
            $model->rootDiskPerformanceLevel = $map['RootDiskPerformanceLevel'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['UserDiskPerformanceLevel'])) {
            $model->userDiskPerformanceLevel = $map['UserDiskPerformanceLevel'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            if (!empty($map['UserDiskSizeGib'])) {
                $model->userDiskSizeGib = $map['UserDiskSizeGib'];
            }
        }

        return $model;
    }
}
