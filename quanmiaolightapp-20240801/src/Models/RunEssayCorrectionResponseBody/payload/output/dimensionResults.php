<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEssayCorrectionResponseBody\payload\output;

use AlibabaCloud\Dara\Model;

class dimensionResults extends Model
{
    /**
     * @var string
     */
    public $analysis;

    /**
     * @var float
     */
    public $maxScore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'analysis' => 'analysis',
        'maxScore' => 'maxScore',
        'name' => 'name',
        'score' => 'score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['analysis'] = $this->analysis;
        }

        if (null !== $this->maxScore) {
            $res['maxScore'] = $this->maxScore;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
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
        if (isset($map['analysis'])) {
            $model->analysis = $map['analysis'];
        }

        if (isset($map['maxScore'])) {
            $model->maxScore = $map['maxScore'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        return $model;
    }
}
