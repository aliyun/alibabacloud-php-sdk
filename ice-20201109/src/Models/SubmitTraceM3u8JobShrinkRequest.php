<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitTraceM3u8JobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $keyUri;
    /**
     * @var string
     */
    public $outputShrink;
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
        'outputShrink' => 'Output',
        'params'       => 'Params',
        'trace'        => 'Trace',
        'traceMediaId' => 'TraceMediaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyUri) {
            $res['KeyUri'] = $this->keyUri;
        }

        if (null !== $this->outputShrink) {
            $res['Output'] = $this->outputShrink;
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
            $model->outputShrink = $map['Output'];
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
