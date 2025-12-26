<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun;

use AlibabaCloud\Dara\Model;

class nodeRunInfos extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stdout;
    protected $_name = [
        'duration' => 'Duration',
        'errorMessage' => 'ErrorMessage',
        'inputs' => 'Inputs',
        'nodeName' => 'NodeName',
        'output' => 'Output',
        'status' => 'Status',
        'stdout' => 'Stdout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }

        return $model;
    }
}
