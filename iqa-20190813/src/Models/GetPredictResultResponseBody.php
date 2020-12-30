<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\SDK\Iqa\V20190813\Models\GetPredictResultResponseBody\predictResults;
use AlibabaCloud\Tea\Model;

class GetPredictResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $trace;

    /**
     * @var int
     */
    public $costTime;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $traceTag;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $question;

    /**
     * @var predictResults[]
     */
    public $predictResults;
    protected $_name = [
        'trace'          => 'Trace',
        'costTime'       => 'CostTime',
        'topK'           => 'TopK',
        'requestId'      => 'RequestId',
        'traceTag'       => 'TraceTag',
        'projectId'      => 'ProjectId',
        'question'       => 'Question',
        'predictResults' => 'PredictResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->traceTag) {
            $res['TraceTag'] = $this->traceTag;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->predictResults) {
            $res['PredictResults'] = [];
            if (null !== $this->predictResults && \is_array($this->predictResults)) {
                $n = 0;
                foreach ($this->predictResults as $item) {
                    $res['PredictResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPredictResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceTag'])) {
            $model->traceTag = $map['TraceTag'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['PredictResults'])) {
            if (!empty($map['PredictResults'])) {
                $model->predictResults = [];
                $n                     = 0;
                foreach ($map['PredictResults'] as $item) {
                    $model->predictResults[$n++] = null !== $item ? predictResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
