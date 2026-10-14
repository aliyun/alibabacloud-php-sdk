<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListQueueTopJobsResponseBody\queueTopJobs;

class ListQueueTopJobsResponseBody extends Model
{
    /**
     * @var queueTopJobs
     */
    public $queueTopJobs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueTopJobs' => 'queueTopJobs',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->queueTopJobs) {
            $this->queueTopJobs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queueTopJobs) {
            $res['queueTopJobs'] = null !== $this->queueTopJobs ? $this->queueTopJobs->toArray($noStream) : $this->queueTopJobs;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['queueTopJobs'])) {
            $model->queueTopJobs = queueTopJobs::fromMap($map['queueTopJobs']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
