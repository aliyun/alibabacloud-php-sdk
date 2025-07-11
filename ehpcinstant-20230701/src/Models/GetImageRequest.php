<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

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
        'additionalRegionIds' => 'AdditionalRegionIds',
        'imageCategory' => 'ImageCategory',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalRegionIds) {
            $res['AdditionalRegionIds'] = $this->additionalRegionIds;
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
     * @return GetImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalRegionIds'])) {
            if (!empty($map['AdditionalRegionIds'])) {
                $model->additionalRegionIds = $map['AdditionalRegionIds'];
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
