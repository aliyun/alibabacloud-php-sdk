<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\CreateAsyncTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 98bbb007-71bb-448b-bab0-2695ce8f8599
     *
     * @var string
     */
    public $jobId;

    /**
     * @example ready
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'jobId'  => 'JobId',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
