<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class GetImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $additionalRegionIdsShrink;

    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @example m-2ze74g5mvy4pjg*****
     *
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;
    protected $_name = [
        'additionalRegionIdsShrink' => 'AdditionalRegionIds',
        'imageCategory' => 'ImageCategory',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalRegionIdsShrink) {
            $res['AdditionalRegionIds'] = $this->additionalRegionIdsShrink;
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

    /**
     * @param array $map
     *
     * @return GetImageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalRegionIds'])) {
            $model->additionalRegionIdsShrink = $map['AdditionalRegionIds'];
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
