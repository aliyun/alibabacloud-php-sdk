<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetEffectiveImageByIdRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $contentLocale;

    /**
     * @var bool
     */
    public $ignoreFilter;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $showHidden;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'contentLocale' => 'ContentLocale',
        'ignoreFilter' => 'IgnoreFilter',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
        'productType' => 'ProductType',
        'showHidden' => 'ShowHidden',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->contentLocale) {
            $res['ContentLocale'] = $this->contentLocale;
        }

        if (null !== $this->ignoreFilter) {
            $res['IgnoreFilter'] = $this->ignoreFilter;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->showHidden) {
            $res['ShowHidden'] = $this->showHidden;
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ContentLocale'])) {
            $model->contentLocale = $map['ContentLocale'];
        }

        if (isset($map['IgnoreFilter'])) {
            $model->ignoreFilter = $map['IgnoreFilter'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ShowHidden'])) {
            $model->showHidden = $map['ShowHidden'];
        }

        return $model;
    }
}
