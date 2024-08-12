<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkPartList;

use AlibabaCloud\Tea\Model;

class pos extends Model
{
    /**
     * @var float[]
     */
    public $axisArray;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @var int[]
     */
    public $textHighlightArea;
    protected $_name = [
        'axisArray'         => 'axisArray',
        'page'              => 'page',
        'textHighlightArea' => 'textHighlightArea',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->axisArray) {
            $res['axisArray'] = $this->axisArray;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->textHighlightArea) {
            $res['textHighlightArea'] = $this->textHighlightArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['axisArray'])) {
            if (!empty($map['axisArray'])) {
                $model->axisArray = $map['axisArray'];
            }
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['textHighlightArea'])) {
            if (!empty($map['textHighlightArea'])) {
                $model->textHighlightArea = $map['textHighlightArea'];
            }
        }

        return $model;
    }
}
