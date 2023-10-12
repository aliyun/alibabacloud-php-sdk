<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\AtomicStep\input;
use AlibabaCloud\SDK\Cmn\V20200825\Models\AtomicStep\output;
use AlibabaCloud\Tea\Model;

class AtomicStep extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var input[]
     */
    public $input;

    /**
     * @var output[]
     */
    public $output;

    /**
     * @var string
     */
    public $stepId;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepType;
    protected $_name = [
        'description' => 'Description',
        'input'       => 'Input',
        'output'      => 'Output',
        'stepId'      => 'StepId',
        'stepName'    => 'StepName',
        'stepType'    => 'StepType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->input) {
            $res['Input'] = [];
            if (null !== $this->input && \is_array($this->input)) {
                $n = 0;
                foreach ($this->input as $item) {
                    $res['Input'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->output) {
            $res['Output'] = [];
            if (null !== $this->output && \is_array($this->output)) {
                $n = 0;
                foreach ($this->output as $item) {
                    $res['Output'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stepId) {
            $res['StepId'] = $this->stepId;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepType) {
            $res['StepType'] = $this->stepType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AtomicStep
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                $n            = 0;
                foreach ($map['Input'] as $item) {
                    $model->input[$n++] = null !== $item ? input::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Output'])) {
            if (!empty($map['Output'])) {
                $model->output = [];
                $n             = 0;
                foreach ($map['Output'] as $item) {
                    $model->output[$n++] = null !== $item ? output::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StepId'])) {
            $model->stepId = $map['StepId'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepType'])) {
            $model->stepType = $map['StepType'];
        }

        return $model;
    }
}
