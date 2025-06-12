<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\customImage;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\logoData;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\publicFigure;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\result;

class results extends Model
{
    /**
     * @var customImage[]
     */
    public $customImage;

    /**
     * @var logoData[]
     */
    public $logoData;

    /**
     * @var publicFigure[]
     */
    public $publicFigure;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $service;

    /**
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

    public function validate()
    {
        if (\is_array($this->customImage)) {
            Model::validateArray($this->customImage);
        }
        if (\is_array($this->logoData)) {
            Model::validateArray($this->logoData);
        }
        if (\is_array($this->publicFigure)) {
            Model::validateArray($this->publicFigure);
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        if (\is_array($this->textInImage)) {
            Model::validateArray($this->textInImage);
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
                    $res['CustomImage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logoData) {
            if (\is_array($this->logoData)) {
                $res['LogoData'] = [];
                $n1 = 0;
                foreach ($this->logoData as $item1) {
                    $res['LogoData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->publicFigure) {
            if (\is_array($this->publicFigure)) {
                $res['PublicFigure'] = [];
                $n1 = 0;
                foreach ($this->publicFigure as $item1) {
                    $res['PublicFigure'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->textInImage) {
            if (\is_array($this->textInImage)) {
                $res['TextInImage'] = [];
                foreach ($this->textInImage as $key1 => $value1) {
                    $res['TextInImage'][$key1] = $value1;
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
        if (isset($map['CustomImage'])) {
            if (!empty($map['CustomImage'])) {
                $model->customImage = [];
                $n1 = 0;
                foreach ($map['CustomImage'] as $item1) {
                    $model->customImage[$n1++] = customImage::fromMap($item1);
                }
            }
        }

        if (isset($map['LogoData'])) {
            if (!empty($map['LogoData'])) {
                $model->logoData = [];
                $n1 = 0;
                foreach ($map['LogoData'] as $item1) {
                    $model->logoData[$n1++] = logoData::fromMap($item1);
                }
            }
        }

        if (isset($map['PublicFigure'])) {
            if (!empty($map['PublicFigure'])) {
                $model->publicFigure = [];
                $n1 = 0;
                foreach ($map['PublicFigure'] as $item1) {
                    $model->publicFigure[$n1++] = publicFigure::fromMap($item1);
                }
            }
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['TextInImage'])) {
            if (!empty($map['TextInImage'])) {
                $model->textInImage = [];
                foreach ($map['TextInImage'] as $key1 => $value1) {
                    $model->textInImage[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
