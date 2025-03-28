<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\vectorChunkList;

use AlibabaCloud\Dara\Model;

class pos extends Model
{
    /**
     * @var float[]
     */
    public $axisArray;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int[]
     */
    public $textHighlightArea;
    protected $_name = [
        'axisArray' => 'axisArray',
        'page' => 'page',
        'textHighlightArea' => 'textHighlightArea',
    ];

    public function validate()
    {
        if (\is_array($this->axisArray)) {
            Model::validateArray($this->axisArray);
        }
        if (\is_array($this->textHighlightArea)) {
            Model::validateArray($this->textHighlightArea);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->axisArray) {
            if (\is_array($this->axisArray)) {
                $res['axisArray'] = [];
                $n1 = 0;
                foreach ($this->axisArray as $item1) {
                    $res['axisArray'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->textHighlightArea) {
            if (\is_array($this->textHighlightArea)) {
                $res['textHighlightArea'] = [];
                $n1 = 0;
                foreach ($this->textHighlightArea as $item1) {
                    $res['textHighlightArea'][$n1++] = $item1;
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
        if (isset($map['axisArray'])) {
            if (!empty($map['axisArray'])) {
                $model->axisArray = [];
                $n1 = 0;
                foreach ($map['axisArray'] as $item1) {
                    $model->axisArray[$n1++] = $item1;
                }
            }
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['textHighlightArea'])) {
            if (!empty($map['textHighlightArea'])) {
                $model->textHighlightArea = [];
                $n1 = 0;
                foreach ($map['textHighlightArea'] as $item1) {
                    $model->textHighlightArea[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
