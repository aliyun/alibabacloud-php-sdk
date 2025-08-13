<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateRecommendTaskRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $sampleId;

    /**
     * @var string
     */
    public $variablesStr;

    /**
     * @var string
     */
    public $velocitiesStr;
    protected $_name = [
        'lang' => 'Lang',
        'name' => 'name',
        'regId' => 'regId',
        'sampleId' => 'sampleId',
        'variablesStr' => 'variablesStr',
        'velocitiesStr' => 'velocitiesStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->sampleId) {
            $res['sampleId'] = $this->sampleId;
        }

        if (null !== $this->variablesStr) {
            $res['variablesStr'] = $this->variablesStr;
        }

        if (null !== $this->velocitiesStr) {
            $res['velocitiesStr'] = $this->velocitiesStr;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['sampleId'])) {
            $model->sampleId = $map['sampleId'];
        }

        if (isset($map['variablesStr'])) {
            $model->variablesStr = $map['variablesStr'];
        }

        if (isset($map['velocitiesStr'])) {
            $model->velocitiesStr = $map['velocitiesStr'];
        }

        return $model;
    }
}
