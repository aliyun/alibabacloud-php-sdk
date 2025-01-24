<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteImagesRequest extends Model
{
    /**
     * @var bool
     */
    public $deleteCascadedBundle;
    /**
     * @var string[]
     */
    public $imageId;
    /**
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
        if (\is_array($this->imageId)) {
            Model::validateArray($this->imageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteCascadedBundle) {
            $res['DeleteCascadedBundle'] = $this->deleteCascadedBundle;
        }

        if (null !== $this->imageId) {
            if (\is_array($this->imageId)) {
                $res['ImageId'] = [];
                $n1             = 0;
                foreach ($this->imageId as $item1) {
                    $res['ImageId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteCascadedBundle'])) {
            $model->deleteCascadedBundle = $map['DeleteCascadedBundle'];
        }

        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = [];
                $n1             = 0;
                foreach ($map['ImageId'] as $item1) {
                    $model->imageId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
