<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var int
     */
    public $minX;

    /**
     * @var float
     */
    public $score;

    /**
     * @var int
     */
    public $maxY;

    /**
     * @var int
     */
    public $maxX;

    /**
     * @var int
     */
    public $minY;
    protected $_name = [
        'minX'  => 'MinX',
        'score' => 'Score',
        'maxY'  => 'MaxY',
        'maxX'  => 'MaxX',
        'minY'  => 'MinY',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minX) {
            $res['MinX'] = $this->minX;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->maxY) {
            $res['MaxY'] = $this->maxY;
        }
        if (null !== $this->maxX) {
            $res['MaxX'] = $this->maxX;
        }
        if (null !== $this->minY) {
            $res['MinY'] = $this->minY;
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
        if (isset($map['MinX'])) {
            $model->minX = $map['MinX'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['MaxY'])) {
            $model->maxY = $map['MaxY'];
        }
        if (isset($map['MaxX'])) {
            $model->maxX = $map['MaxX'];
        }
        if (isset($map['MinY'])) {
            $model->minY = $map['MinY'];
        }

        return $model;
    }
}
