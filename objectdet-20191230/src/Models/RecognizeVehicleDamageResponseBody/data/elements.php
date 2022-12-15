<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDamageResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description 1
     *
     * @var int[]
     */
    public $boxes;

    /**
     * @example 0.683465
     *
     * @var float
     */
    public $score;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $scores;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'boxes'  => 'Boxes',
        'score'  => 'Score',
        'scores' => 'Scores',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scores) {
            $res['Scores'] = $this->scores;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Scores'])) {
            if (!empty($map['Scores'])) {
                $model->scores = $map['Scores'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
