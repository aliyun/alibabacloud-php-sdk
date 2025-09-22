<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\customImage;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\faceData;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\logoData;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\ocrResult;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\publicFigure;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\recognition;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\textInImage;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponseBody\data\ext\vlContent;

class ext extends Model
{
    /**
     * @var customImage[]
     */
    public $customImage;

    /**
     * @var faceData[]
     */
    public $faceData;

    /**
     * @var logoData[]
     */
    public $logoData;

    /**
     * @var ocrResult[]
     */
    public $ocrResult;

    /**
     * @var publicFigure[]
     */
    public $publicFigure;

    /**
     * @var recognition[]
     */
    public $recognition;

    /**
     * @var textInImage
     */
    public $textInImage;

    /**
     * @var vlContent
     */
    public $vlContent;
    protected $_name = [
        'customImage' => 'CustomImage',
        'faceData' => 'FaceData',
        'logoData' => 'LogoData',
        'ocrResult' => 'OcrResult',
        'publicFigure' => 'PublicFigure',
        'recognition' => 'Recognition',
        'textInImage' => 'TextInImage',
        'vlContent' => 'VlContent',
    ];

    public function validate()
    {
        if (\is_array($this->customImage)) {
            Model::validateArray($this->customImage);
        }
        if (\is_array($this->faceData)) {
            Model::validateArray($this->faceData);
        }
        if (\is_array($this->logoData)) {
            Model::validateArray($this->logoData);
        }
        if (\is_array($this->ocrResult)) {
            Model::validateArray($this->ocrResult);
        }
        if (\is_array($this->publicFigure)) {
            Model::validateArray($this->publicFigure);
        }
        if (\is_array($this->recognition)) {
            Model::validateArray($this->recognition);
        }
        if (null !== $this->textInImage) {
            $this->textInImage->validate();
        }
        if (null !== $this->vlContent) {
            $this->vlContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customImage) {
            if (\is_array($this->customImage)) {
                $res['CustomImage'] = [];
                $n1 = 0;
                foreach ($this->customImage as $item1) {
                    $res['CustomImage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->faceData) {
            if (\is_array($this->faceData)) {
                $res['FaceData'] = [];
                $n1 = 0;
                foreach ($this->faceData as $item1) {
                    $res['FaceData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logoData) {
            if (\is_array($this->logoData)) {
                $res['LogoData'] = [];
                $n1 = 0;
                foreach ($this->logoData as $item1) {
                    $res['LogoData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ocrResult) {
            if (\is_array($this->ocrResult)) {
                $res['OcrResult'] = [];
                $n1 = 0;
                foreach ($this->ocrResult as $item1) {
                    $res['OcrResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicFigure) {
            if (\is_array($this->publicFigure)) {
                $res['PublicFigure'] = [];
                $n1 = 0;
                foreach ($this->publicFigure as $item1) {
                    $res['PublicFigure'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recognition) {
            if (\is_array($this->recognition)) {
                $res['Recognition'] = [];
                $n1 = 0;
                foreach ($this->recognition as $item1) {
                    $res['Recognition'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textInImage) {
            $res['TextInImage'] = null !== $this->textInImage ? $this->textInImage->toArray($noStream) : $this->textInImage;
        }

        if (null !== $this->vlContent) {
            $res['VlContent'] = null !== $this->vlContent ? $this->vlContent->toArray($noStream) : $this->vlContent;
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
        if (isset($map['CustomImage'])) {
            if (!empty($map['CustomImage'])) {
                $model->customImage = [];
                $n1 = 0;
                foreach ($map['CustomImage'] as $item1) {
                    $model->customImage[$n1] = customImage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FaceData'])) {
            if (!empty($map['FaceData'])) {
                $model->faceData = [];
                $n1 = 0;
                foreach ($map['FaceData'] as $item1) {
                    $model->faceData[$n1] = faceData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogoData'])) {
            if (!empty($map['LogoData'])) {
                $model->logoData = [];
                $n1 = 0;
                foreach ($map['LogoData'] as $item1) {
                    $model->logoData[$n1] = logoData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OcrResult'])) {
            if (!empty($map['OcrResult'])) {
                $model->ocrResult = [];
                $n1 = 0;
                foreach ($map['OcrResult'] as $item1) {
                    $model->ocrResult[$n1] = ocrResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicFigure'])) {
            if (!empty($map['PublicFigure'])) {
                $model->publicFigure = [];
                $n1 = 0;
                foreach ($map['PublicFigure'] as $item1) {
                    $model->publicFigure[$n1] = publicFigure::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Recognition'])) {
            if (!empty($map['Recognition'])) {
                $model->recognition = [];
                $n1 = 0;
                foreach ($map['Recognition'] as $item1) {
                    $model->recognition[$n1] = recognition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TextInImage'])) {
            $model->textInImage = textInImage::fromMap($map['TextInImage']);
        }

        if (isset($map['VlContent'])) {
            $model->vlContent = vlContent::fromMap($map['VlContent']);
        }

        return $model;
    }
}
