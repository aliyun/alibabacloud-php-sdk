<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBundleRequest extends Model
{
    /**
     * @var string
     */
    public $bundleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
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
