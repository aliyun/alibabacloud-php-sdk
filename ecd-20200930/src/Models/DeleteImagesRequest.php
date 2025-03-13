<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteImagesRequest extends Model
{
    /**
     * @description Specifies whether to delete the associated template.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteCascadedBundle;

    /**
     * @description The image IDs. You can specify 1 to 100 image IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $imageId;

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
        'deleteCascadedBundle' => 'DeleteCascadedBundle',
        'imageId'              => 'ImageId',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteCascadedBundle) {
            $res['DeleteCascadedBundle'] = $this->deleteCascadedBundle;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteCascadedBundle'])) {
            $model->deleteCascadedBundle = $map['DeleteCascadedBundle'];
        }
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
