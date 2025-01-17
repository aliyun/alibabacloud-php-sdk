<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceM3u8JobRequest\output;

class SubmitTraceM3u8JobRequest extends Model
{
    /**
     * @var string
     */
    public $keyUri;
    /**
     * @var output
     */
    public $output;
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $trace;
    /**
     * @var string
     */
    public $traceMediaId;
    protected $_name = [
        'keyUri'       => 'KeyUri',
        'output'       => 'Output',
        'params'       => 'Params',
        'trace'        => 'Trace',
        'traceMediaId' => 'TraceMediaId',
    ];

    public function validate()
    {
        if (null !== $this->output) {
            $this->output->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyUri) {
            $res['KeyUri'] = $this->keyUri;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }

        if (null !== $this->traceMediaId) {
            $res['TraceMediaId'] = $this->traceMediaId;
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
        if (isset($map['KeyUri'])) {
            $model->keyUri = $map['KeyUri'];
        }

        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }

        if (isset($map['TraceMediaId'])) {
            $model->traceMediaId = $map['TraceMediaId'];
        }

        return $model;
    }
}
