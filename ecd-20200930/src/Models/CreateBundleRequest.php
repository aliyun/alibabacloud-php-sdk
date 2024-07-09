<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBundleRequest extends Model
{
    /**
     * @description The name of the cloud computer template.
     *
     * @example testBundleName
     *
     * @var string
     */
    public $bundleName;

    /**
     * @description The description of the cloud computer template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance type of the cloud computers. You can call the [DescribeBundles](https://help.aliyun.com/document_detail/436974.html) operation to query cloud computer templates and obtain the instance types supported by the cloud computers from the `DesktopType` response parameter.
     *
     * This parameter is required.
     * @example ecd.basic.large
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the image.
     *
     * This parameter is required.
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The OS language. This parameter is available only for system images. Valid values:
     *
     *   zh-CN: Simplified Chinese
     *   zh-HK: Traditional Chinese (Hong Kong)
     *   en-US: American English
     *   ja-JP: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

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
     * @description The performance level (PL) of the system disk. When the cloud computer instance type that is specified by the DesktopType parameter is set to a graphical instance type or instance type with a high clock speed, you can set the performance level of the disks. For more information about the differences among disks at different PLs, see [Enhanced SSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * Valid values:
     *
     *   PL1
     *
     * <!-- -->
     *
     *   PL0
     *
     * <!-- -->
     *
     *   PL3
     *
     * <!-- -->
     *
     *   PL2
     *
     * <!-- -->
     * @example PL1
     *
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
     * @description The size of the system disk. Unit: GiB. The value of this parameter must be consistent with the system disk size supported by the cloud computer instance type. For more information, see [Overview](https://help.aliyun.com/document_detail/188609.html).
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The PL of the data disk. When the cloud computer instance type that is specified by the DesktopType parameter is set to a graphical instance type or instance type with a high clock speed, you can set the performance level of the disks. For more information about the differences among disks at different PLs, see [Enhanced SSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * Valid values:
     *
     *   PL1
     *
     * <!-- -->
     *
     *   PL0
     *
     * <!-- -->
     *
     *   PL3
     *
     * <!-- -->
     *
     *   PL2
     *
     * <!-- -->
     * @example PL1
     *
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @description The data disk sizes. You can configure only one data disk.
     *
     * This parameter is required.
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
