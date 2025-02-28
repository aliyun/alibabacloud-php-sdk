<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class ReportTaskSucceededRequest extends Model
{
    /**
     * @var string
     */
    public $output;
    /**
     * @var string
     */
    public $taskToken;
    protected $_name = [
        'output'    => 'Output',
        'taskToken' => 'TaskToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->taskToken) {
            $res['TaskToken'] = $this->taskToken;
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
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['TaskToken'])) {
            $model->taskToken = $map['TaskToken'];
        }

        return $model;
    }
}
