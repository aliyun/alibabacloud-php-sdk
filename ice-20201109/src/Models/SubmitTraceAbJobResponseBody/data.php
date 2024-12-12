<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example bfb786c639894f4d80648792021e****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example bf53333264f4d80648792021e****
     *
     * @var string
     */
    public $traceMediaId;
    protected $_name = [
        'jobId'        => 'JobId',
        'traceMediaId' => 'TraceMediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->traceMediaId) {
            $res['TraceMediaId'] = $this->traceMediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['TraceMediaId'])) {
            $model->traceMediaId = $map['TraceMediaId'];
        }

        return $model;
    }
}
