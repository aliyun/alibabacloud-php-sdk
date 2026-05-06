<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEssayCorrectionTaskRequest;

use AlibabaCloud\Dara\Model;

class dimensions extends Model
{
    /**
     * @var int
     */
    public $maxScore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $rubric;
    protected $_name = [
        'maxScore' => 'maxScore',
        'name' => 'name',
        'rubric' => 'rubric',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxScore) {
            $res['maxScore'] = $this->maxScore;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->rubric) {
            $res['rubric'] = $this->rubric;
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
        if (isset($map['maxScore'])) {
            $model->maxScore = $map['maxScore'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['rubric'])) {
            $model->rubric = $map['rubric'];
        }

        return $model;
    }
}
