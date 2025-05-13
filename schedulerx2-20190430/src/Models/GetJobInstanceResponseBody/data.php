<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInstanceResponseBody\data\jobInstanceDetail;

class data extends Model
{
    /**
     * @var jobInstanceDetail
     */
    public $jobInstanceDetail;
    protected $_name = [
        'jobInstanceDetail' => 'JobInstanceDetail',
    ];

    public function validate()
    {
        if (null !== $this->jobInstanceDetail) {
            $this->jobInstanceDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobInstanceDetail) {
            $res['JobInstanceDetail'] = null !== $this->jobInstanceDetail ? $this->jobInstanceDetail->toArray($noStream) : $this->jobInstanceDetail;
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
        if (isset($map['JobInstanceDetail'])) {
            $model->jobInstanceDetail = jobInstanceDetail::fromMap($map['JobInstanceDetail']);
        }

        return $model;
    }
}
