<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class GetPredictResultRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $question;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $traceTag;
    protected $_name = [
        'projectId' => 'ProjectId',
        'question'  => 'Question',
        'topK'      => 'TopK',
        'traceTag'  => 'TraceTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->traceTag) {
            $res['TraceTag'] = $this->traceTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPredictResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['TraceTag'])) {
            $model->traceTag = $map['TraceTag'];
        }

        return $model;
    }
}
