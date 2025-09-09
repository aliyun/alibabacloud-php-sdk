<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponseBody\imageResponse;

use AlibabaCloud\Dara\Model;

class imageList extends Model
{
    /**
     * @var string
     */
    public $descriptiveTones;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $imageRatio;

    /**
     * @var string
     */
    public $imageUuid;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $quantitativePalette;

    /**
     * @var string
     */
    public $tagsFromImage;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'descriptiveTones' => 'DescriptiveTones',
        'height' => 'Height',
        'imageCategory' => 'ImageCategory',
        'imageRatio' => 'ImageRatio',
        'imageUuid' => 'ImageUuid',
        'ossKey' => 'OssKey',
        'quantitativePalette' => 'QuantitativePalette',
        'tagsFromImage' => 'TagsFromImage',
        'url' => 'Url',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->descriptiveTones) {
            $res['DescriptiveTones'] = $this->descriptiveTones;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        if (null !== $this->imageRatio) {
            $res['ImageRatio'] = $this->imageRatio;
        }

        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->quantitativePalette) {
            $res['QuantitativePalette'] = $this->quantitativePalette;
        }

        if (null !== $this->tagsFromImage) {
            $res['TagsFromImage'] = $this->tagsFromImage;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['DescriptiveTones'])) {
            $model->descriptiveTones = $map['DescriptiveTones'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        if (isset($map['ImageRatio'])) {
            $model->imageRatio = $map['ImageRatio'];
        }

        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['QuantitativePalette'])) {
            $model->quantitativePalette = $map['QuantitativePalette'];
        }

        if (isset($map['TagsFromImage'])) {
            $model->tagsFromImage = $map['TagsFromImage'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
