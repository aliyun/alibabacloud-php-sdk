<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Image extends Model
{
    /**
     * @var CroppingSuggestion[]
     */
    public $croppingSuggestions;

    /**
     * @var string
     */
    public $EXIF;

    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var ImageScore
     */
    public $imageScore;

    /**
     * @var int
     */
    public $imageWidth;

    /**
     * @var OCRContents[]
     */
    public $OCRContents;
    protected $_name = [
        'croppingSuggestions' => 'CroppingSuggestions',
        'EXIF' => 'EXIF',
        'imageHeight' => 'ImageHeight',
        'imageScore' => 'ImageScore',
        'imageWidth' => 'ImageWidth',
        'OCRContents' => 'OCRContents',
    ];

    public function validate()
    {
        if (\is_array($this->croppingSuggestions)) {
            Model::validateArray($this->croppingSuggestions);
        }
        if (null !== $this->imageScore) {
            $this->imageScore->validate();
        }
        if (\is_array($this->OCRContents)) {
            Model::validateArray($this->OCRContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->croppingSuggestions) {
            if (\is_array($this->croppingSuggestions)) {
                $res['CroppingSuggestions'] = [];
                $n1 = 0;
                foreach ($this->croppingSuggestions as $item1) {
                    $res['CroppingSuggestions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->EXIF) {
            $res['EXIF'] = $this->EXIF;
        }

        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }

        if (null !== $this->imageScore) {
            $res['ImageScore'] = null !== $this->imageScore ? $this->imageScore->toArray($noStream) : $this->imageScore;
        }

        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }

        if (null !== $this->OCRContents) {
            if (\is_array($this->OCRContents)) {
                $res['OCRContents'] = [];
                $n1 = 0;
                foreach ($this->OCRContents as $item1) {
                    $res['OCRContents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CroppingSuggestions'])) {
            if (!empty($map['CroppingSuggestions'])) {
                $model->croppingSuggestions = [];
                $n1 = 0;
                foreach ($map['CroppingSuggestions'] as $item1) {
                    $model->croppingSuggestions[$n1] = CroppingSuggestion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EXIF'])) {
            $model->EXIF = $map['EXIF'];
        }

        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }

        if (isset($map['ImageScore'])) {
            $model->imageScore = ImageScore::fromMap($map['ImageScore']);
        }

        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }

        if (isset($map['OCRContents'])) {
            if (!empty($map['OCRContents'])) {
                $model->OCRContents = [];
                $n1 = 0;
                foreach ($map['OCRContents'] as $item1) {
                    $model->OCRContents[$n1] = OCRContents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
