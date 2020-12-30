<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ReportTaskSucceededRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskToken;

    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskToken' => 'TaskToken',
        'output'    => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskToken) {
            $res['TaskToken'] = $this->taskToken;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskToken'])) {
            $model->taskToken = $map['TaskToken'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
