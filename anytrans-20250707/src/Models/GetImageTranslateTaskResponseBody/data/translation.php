<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\boundingBoxes;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\tableInfos;

class translation extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var boundingBoxes[]
     */
    public $boundingBoxes;

    /**
     * @var int
     */
    public $boxesCount;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $orgHeight;

    /**
     * @var int
     */
    public $orgWidth;

    /**
     * @var tableInfos[]
     */
    public $tableInfos;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'angle' => 'angle',
        'boundingBoxes' => 'boundingBoxes',
        'boxesCount' => 'boxesCount',
        'height' => 'height',
        'orgHeight' => 'orgHeight',
        'orgWidth' => 'orgWidth',
        'tableInfos' => 'tableInfos',
        'width' => 'width',
    ];

    public function validate()
    {
        if (\is_array($this->boundingBoxes)) {
            Model::validateArray($this->boundingBoxes);
        }
        if (\is_array($this->tableInfos)) {
            Model::validateArray($this->tableInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['angle'] = $this->angle;
        }

        if (null !== $this->boundingBoxes) {
            if (\is_array($this->boundingBoxes)) {
                $res['boundingBoxes'] = [];
                $n1 = 0;
                foreach ($this->boundingBoxes as $item1) {
                    $res['boundingBoxes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->boxesCount) {
            $res['boxesCount'] = $this->boxesCount;
        }

        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->orgHeight) {
            $res['orgHeight'] = $this->orgHeight;
        }

        if (null !== $this->orgWidth) {
            $res['orgWidth'] = $this->orgWidth;
        }

        if (null !== $this->tableInfos) {
            if (\is_array($this->tableInfos)) {
                $res['tableInfos'] = [];
                $n1 = 0;
                foreach ($this->tableInfos as $item1) {
                    $res['tableInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['angle'])) {
            $model->angle = $map['angle'];
        }

        if (isset($map['boundingBoxes'])) {
            if (!empty($map['boundingBoxes'])) {
                $model->boundingBoxes = [];
                $n1 = 0;
                foreach ($map['boundingBoxes'] as $item1) {
                    $model->boundingBoxes[$n1] = boundingBoxes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['boxesCount'])) {
            $model->boxesCount = $map['boxesCount'];
        }

        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['orgHeight'])) {
            $model->orgHeight = $map['orgHeight'];
        }

        if (isset($map['orgWidth'])) {
            $model->orgWidth = $map['orgWidth'];
        }

        if (isset($map['tableInfos'])) {
            if (!empty($map['tableInfos'])) {
                $model->tableInfos = [];
                $n1 = 0;
                foreach ($map['tableInfos'] as $item1) {
                    $model->tableInfos[$n1] = tableInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
