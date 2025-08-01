<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponseBody\imageResponse;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @var string
     */
    public $descriptiveTones;

    /**
     * @example 1000
     *
     * @var int
     */
    public $height;

    /**
     * @example normal
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $imageRatio;

    /**
     * @example 70687446-821c-4ebd-9be6-b57dc0a3500a
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description oss key
     *
     * @example 1ad5/c728/cb40/2410/e01d/b24c/9acd/7d51/1ad5c728cb402410e01db24c9acd7d51
     *
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
     * @example https://other-general-huadong1.oss-cn-hangzhou.aliyuncs.com/uploadWidget/RollTicket_01.jpeg
     *
     * @var string
     */
    public $url;

    /**
     * @example 154
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return imageList
     */
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
