<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class DeleteWorkerResourceRequest extends Model
{
    /**
     * @var int
     */
    public $jobId;
    /**
     * @var int
     */
    public $workerId;
    protected $_name = [
        'jobId'    => 'JobId',
        'workerId' => 'WorkerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->workerId) {
            $res['WorkerId'] = $this->workerId;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['WorkerId'])) {
            $model->workerId = $map['WorkerId'];
        }

        return $model;
    }
}
