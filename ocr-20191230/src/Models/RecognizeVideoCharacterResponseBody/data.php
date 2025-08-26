<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponseBody\data\frames;

class data extends Model
{
    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $inputFile;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'frames' => 'Frames',
        'height' => 'Height',
        'inputFile' => 'InputFile',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frames) {
            if (\is_array($this->frames)) {
                $res['Frames'] = [];
                $n1 = 0;
                foreach ($this->frames as $item1) {
                    $res['Frames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
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
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n1 = 0;
                foreach ($map['Frames'] as $item1) {
                    $model->frames[$n1] = frames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
