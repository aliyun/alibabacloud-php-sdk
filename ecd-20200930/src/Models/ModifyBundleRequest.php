<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyBundleRequest extends Model
{
    /**
     * @description The ID of the cloud computer template that you want to modify.
     *
     * @example b-2g65ljy4291vl****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The name of the new cloud computer template.
     *
     * @example newName
     *
     * @var string
     */
    public $bundleName;

    /**
     * @description The description of the new cloud computer template.
     *
     * @example newDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The new image ID. The new image must meet the following conditions:
     *
     *   The new image must be in the Available state.
     *   The operating system of the new image must be the same as that of the original image.
     *   The required disk size for the new image cannot be greater than that for the original image.
     *   The GPU type of the new image must be the same as that of the original image.
     *
     * @example m-aea3oaww001np****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The OS language. This parameter is available only for system images.
     *
     * Valid values:
     *
     *   en-US: American English
     *   zh-HK: Traditional Chinese (Hong Kong)
     *   zh-CN: Simplified Chinese.
     *
     *   ja-JP: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bundleId'    => 'BundleId',
        'bundleName'  => 'BundleName',
        'description' => 'Description',
        'imageId'     => 'ImageId',
        'language'    => 'Language',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBundleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        return $model;
    }
}
