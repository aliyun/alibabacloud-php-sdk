<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job;
use AlibabaCloud\Tea\Model;

class jobResult extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var job
     */
    public $job;
    protected $_name = [
        'success' => 'Success',
        'code'    => 'Code',
        'message' => 'Message',
        'job'     => 'Job',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->job) {
            $res['Job'] = null !== $this->job ? $this->job->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Job'])) {
            $model->job = job::fromMap($map['Job']);
        }

        return $model;
    }
}
