<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var int
     */
    public $maxX;

    /**
     * @var int
     */
    public $maxY;

    /**
     * @var int
     */
    public $minX;

    /**
     * @var int
     */
    public $minY;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'maxX'  => 'MaxX',
        'maxY'  => 'MaxY',
        'minX'  => 'MinX',
        'minY'  => 'MinY',
        'score' => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxX) {
            $res['MaxX'] = $this->maxX;
        }
        if (null !== $this->maxY) {
            $res['MaxY'] = $this->maxY;
        }
        if (null !== $this->minX) {
            $res['MinX'] = $this->minX;
        }
        if (null !== $this->minY) {
            $res['MinY'] = $this->minY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxX'])) {
            $model->maxX = $map['MaxX'];
        }
        if (isset($map['MaxY'])) {
            $model->maxY = $map['MaxY'];
        }
        if (isset($map['MinX'])) {
            $model->minX = $map['MinX'];
        }
        if (isset($map['MinY'])) {
            $model->minY = $map['MinY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
