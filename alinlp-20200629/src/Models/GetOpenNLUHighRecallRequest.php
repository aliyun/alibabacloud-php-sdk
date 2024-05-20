<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetOpenNLUHighRecallRequest extends Model
{
    /**
     * @var string
     */
    public $examples;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $sentence;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $task;
    protected $_name = [
        'examples'    => 'Examples',
        'labels'      => 'Labels',
        'sentence'    => 'Sentence',
        'serviceCode' => 'ServiceCode',
        'task'        => 'Task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->examples) {
            $res['Examples'] = $this->examples;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->sentence) {
            $res['Sentence'] = $this->sentence;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpenNLUHighRecallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Examples'])) {
            $model->examples = $map['Examples'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Sentence'])) {
            $model->sentence = $map['Sentence'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        return $model;
    }
}
