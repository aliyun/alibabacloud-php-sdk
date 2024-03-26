<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ReportTaskSucceededRequest extends Model
{
    /**
     * @description The output information of the task whose execution success you want to report.
     *
     * @example {"key":"value"}
     *
     * @var string
     */
    public $output;

    /**
     * @description The token of the task whose execution success you want to report. If this parameter appears in **waitforCallback** mode, the parameter is passed to the called service, such as Message Service (MNS) or Function Compute. For MNS, the value of this parameter can be obtained from the message. For Function Compute, the value of this parameter can be obtained from the event.
     *
     * @example emptyString
     *
     * @var string
     */
    public $taskToken;
    protected $_name = [
        'output'    => 'Output',
        'taskToken' => 'TaskToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ReportTaskSucceededRequest
     */
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
