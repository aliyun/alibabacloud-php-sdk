<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class GetImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $additionalRegionIds;

    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;
    protected $_name = [
        'additionalRegionIds' => 'AdditionalRegionIds',
        'imageCategory' => 'ImageCategory',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
    ];

    public function validate()
    {
        if (\is_array($this->additionalRegionIds)) {
            Model::validateArray($this->additionalRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalRegionIds) {
            if (\is_array($this->additionalRegionIds)) {
                $res['AdditionalRegionIds'] = [];
                $n1 = 0;
                foreach ($this->additionalRegionIds as $item1) {
                    $res['AdditionalRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
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
        if (isset($map['AdditionalRegionIds'])) {
            if (!empty($map['AdditionalRegionIds'])) {
                $model->additionalRegionIds = [];
                $n1 = 0;
                foreach ($map['AdditionalRegionIds'] as $item1) {
                    $model->additionalRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        return $model;
    }
}
