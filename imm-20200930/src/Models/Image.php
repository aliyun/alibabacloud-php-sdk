<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Image extends Model
{
    /**
     * @description ImageWidth
     *
     * @var int
     */
    public $imageWidth;

    /**
     * @description ImageHeight
     *
     * @var int
     */
    public $imageHeight;

    /**
     * @description EXIF
     *
     * @var string
     */
    public $EXIF;

    /**
     * @var ImageScore
     */
    public $imageScore;

    /**
     * @description CroppingSuggestions
     *
     * @var CroppingSuggestion[]
     */
    public $croppingSuggestions;

    /**
     * @description OCRContents
     *
     * @var OCRContents[]
     */
    public $OCRContents;
    protected $_name = [
        'imageWidth'          => 'ImageWidth',
        'imageHeight'         => 'ImageHeight',
        'EXIF'                => 'EXIF',
        'imageScore'          => 'ImageScore',
        'croppingSuggestions' => 'CroppingSuggestions',
        'OCRContents'         => 'OCRContents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->EXIF) {
            $res['EXIF'] = $this->EXIF;
        }
        if (null !== $this->imageScore) {
            $res['ImageScore'] = null !== $this->imageScore ? $this->imageScore->toMap() : null;
        }
        if (null !== $this->croppingSuggestions) {
            $res['CroppingSuggestions'] = [];
            if (null !== $this->croppingSuggestions && \is_array($this->croppingSuggestions)) {
                $n = 0;
                foreach ($this->croppingSuggestions as $item) {
                    $res['CroppingSuggestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OCRContents) {
            $res['OCRContents'] = [];
            if (null !== $this->OCRContents && \is_array($this->OCRContents)) {
                $n = 0;
                foreach ($this->OCRContents as $item) {
                    $res['OCRContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['EXIF'])) {
            $model->EXIF = $map['EXIF'];
        }
        if (isset($map['ImageScore'])) {
            $model->imageScore = ImageScore::fromMap($map['ImageScore']);
        }
        if (isset($map['CroppingSuggestions'])) {
            if (!empty($map['CroppingSuggestions'])) {
                $model->croppingSuggestions = [];
                $n                          = 0;
                foreach ($map['CroppingSuggestions'] as $item) {
                    $model->croppingSuggestions[$n++] = null !== $item ? CroppingSuggestion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OCRContents'])) {
            if (!empty($map['OCRContents'])) {
                $model->OCRContents = [];
                $n                  = 0;
                foreach ($map['OCRContents'] as $item) {
                    $model->OCRContents[$n++] = null !== $item ? OCRContents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
