<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class QueryIncidentTracingJudgeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var int[]
     */
    public $tracingJudge;
    protected $_name = [
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'tracingJudge' => 'TracingJudge',
    ];

    public function validate()
    {
        if (\is_array($this->tracingJudge)) {
            Model::validateArray($this->tracingJudge);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tracingJudge) {
            if (\is_array($this->tracingJudge)) {
                $res['TracingJudge'] = [];
                foreach ($this->tracingJudge as $key1 => $value1) {
                    $res['TracingJudge'][$key1] = $value1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TracingJudge'])) {
            if (!empty($map['TracingJudge'])) {
                $model->tracingJudge = [];
                foreach ($map['TracingJudge'] as $key1 => $value1) {
                    $model->tracingJudge[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
