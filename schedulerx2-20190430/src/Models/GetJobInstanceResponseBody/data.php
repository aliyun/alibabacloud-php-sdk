<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceResponseBody\data\jobInstanceDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the job instance.
     *
     * @var jobInstanceDetail
     */
    public $jobInstanceDetail;
    protected $_name = [
        'jobInstanceDetail' => 'JobInstanceDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInstanceDetail) {
            $res['JobInstanceDetail'] = null !== $this->jobInstanceDetail ? $this->jobInstanceDetail->toMap() : null;
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
        if (isset($map['JobInstanceDetail'])) {
            $model->jobInstanceDetail = jobInstanceDetail::fromMap($map['JobInstanceDetail']);
        }

        return $model;
    }
}
