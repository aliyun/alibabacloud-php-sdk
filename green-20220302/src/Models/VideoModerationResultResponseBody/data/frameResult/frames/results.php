<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\customImage;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\logoData;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\publicFigure;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\result;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description If a custom image library is hit, information about the custom image library is returned.
     *
     * @var customImage[]
     */
    public $customImage;

    /**
     * @description Returns logo information when the video contains a logo.
     *
     * @var logoData[]
     */
    public $logoData;

    /**
     * @description If the video contains a specific figure, the code of the identified figure is returned.
     *
     * @var publicFigure[]
     */
    public $publicFigure;

    /**
     * @description The results of frame moderation parameters such as the label parameter and the confidence parameter.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The moderation service that is called.
     *
     * @example tonalityImprove
     *
     * @var string
     */
    public $service;

    /**
     * @description The information about the text hit in the image is returned.
     *
     * @var mixed[]
     */
    public $textInImage;
    protected $_name = [
        'customImage' => 'CustomImage',
        'logoData' => 'LogoData',
        'publicFigure' => 'PublicFigure',
        'result' => 'Result',
        'service' => 'Service',
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
            $res['LogoData'] = [];
            if (null !== $this->logoData && \is_array($this->logoData)) {
                $n = 0;
                foreach ($this->logoData as $item) {
                    $res['LogoData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->textInImage) {
            $res['TextInImage'] = $this->textInImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
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
            if (!empty($map['LogoData'])) {
                $model->logoData = [];
                $n = 0;
                foreach ($map['LogoData'] as $item) {
                    $model->logoData[$n++] = null !== $item ? logoData::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['TextInImage'])) {
            $model->textInImage = $map['TextInImage'];
        }

        return $model;
    }
}
