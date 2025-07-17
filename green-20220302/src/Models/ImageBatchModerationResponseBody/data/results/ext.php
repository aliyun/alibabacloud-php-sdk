<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext\customImage;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext\logoData;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext\publicFigure;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponseBody\data\results\ext\textInImage;
use AlibabaCloud\Tea\Model;

class ext extends Model
{
    /**
     * @description Custom image library hit information list.
     *
     * @var customImage[]
     */
    public $customImage;

    /**
     * @description Logo identification information.
     *
     * @var logoData
     */
    public $logoData;

    /**
     * @description List of character information.
     *
     * @var publicFigure[]
     */
    public $publicFigure;

    /**
     * @description Return the text information from the recognized images.
     *
     * @var textInImage
     */
    public $textInImage;
    protected $_name = [
        'customImage' => 'CustomImage',
        'logoData' => 'LogoData',
        'publicFigure' => 'PublicFigure',
        'textInImage' => 'TextInImage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customImage) {
            $res['CustomImage'] = [];
            if (null !== $this->customImage && \is_array($this->customImage)) {
                $n = 0;
                foreach ($this->customImage as $item) {
                    $res['CustomImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logoData) {
            $res['LogoData'] = null !== $this->logoData ? $this->logoData->toMap() : null;
        }
        if (null !== $this->publicFigure) {
            $res['PublicFigure'] = [];
            if (null !== $this->publicFigure && \is_array($this->publicFigure)) {
                $n = 0;
                foreach ($this->publicFigure as $item) {
                    $res['PublicFigure'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textInImage) {
            $res['TextInImage'] = null !== $this->textInImage ? $this->textInImage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomImage'])) {
            if (!empty($map['CustomImage'])) {
                $model->customImage = [];
                $n = 0;
                foreach ($map['CustomImage'] as $item) {
                    $model->customImage[$n++] = null !== $item ? customImage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogoData'])) {
            $model->logoData = logoData::fromMap($map['LogoData']);
        }
        if (isset($map['PublicFigure'])) {
            if (!empty($map['PublicFigure'])) {
                $model->publicFigure = [];
                $n = 0;
                foreach ($map['PublicFigure'] as $item) {
                    $model->publicFigure[$n++] = null !== $item ? publicFigure::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextInImage'])) {
            $model->textInImage = textInImage::fromMap($map['TextInImage']);
        }

        return $model;
    }
}
