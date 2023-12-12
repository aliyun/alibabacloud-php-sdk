<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTracemuResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10011001110101010101****
     *
     * @var string
     */
    public $code;

    /**
     * @example bfb786c639894f4d80648792021e****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'code'  => 'Code',
        'jobId' => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
