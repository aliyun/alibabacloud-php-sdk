<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse\bundles\disks;
use AlibabaCloud\Tea\Model;

class bundles extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $bundleType;

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
     * @var disks[]
     */
    public $disks;
    protected $_name = [
        'imageId'     => 'ImageId',
        'bundleId'    => 'BundleId',
        'bundleType'  => 'BundleType',
        'bundleName'  => 'BundleName',
        'description' => 'Description',
        'desktopType' => 'DesktopType',
        'disks'       => 'Disks',
    ];

    public function validate()
    {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('bundleId', $this->bundleId, true);
        Model::validateRequired('bundleType', $this->bundleType, true);
        Model::validateRequired('bundleName', $this->bundleName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('desktopType', $this->desktopType, true);
        Model::validateRequired('disks', $this->disks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->bundleType) {
            $res['BundleType'] = $this->bundleType;
        }
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bundles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['BundleType'])) {
            $model->bundleType = $map['BundleType'];
        }
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n            = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
