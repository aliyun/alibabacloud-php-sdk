<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitTraceM3u8JobShrinkRequest extends Model
{
    /**
     * @example https://cipher.abc.com
     *
     * @var string
     */
    public $keyUri;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $outputShrink;

    /**
     * @example {"m3u8Type":"v1"}
     *
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $trace;

    /**
     * @example 437bd2b516ffda105d07b12a9a82****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitTraceM3u8JobShrinkRequest
     */
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
