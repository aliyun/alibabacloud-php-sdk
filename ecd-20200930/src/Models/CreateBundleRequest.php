<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBundleRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @var string
     */
    public $bundleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int[]
     */
    public $userDiskSizeGib;
    protected $_name = [
        'regionId'        => 'RegionId',
        'imageId'         => 'ImageId',
        'desktopType'     => 'DesktopType',
        'rootDiskSizeGib' => 'RootDiskSizeGib',
        'bundleName'      => 'BundleName',
        'description'     => 'Description',
        'userDiskSizeGib' => 'UserDiskSizeGib',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('desktopType', $this->desktopType, true);
        Model::validateRequired('rootDiskSizeGib', $this->rootDiskSizeGib, true);
        Model::validateRequired('userDiskSizeGib', $this->userDiskSizeGib, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            if (!empty($map['UserDiskSizeGib'])) {
                $model->userDiskSizeGib = $map['UserDiskSizeGib'];
            }
        }

        return $model;
    }
}
