<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob;

class GetSynchronizationJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var synchronizationJob
     */
    public $synchronizationJob;
    protected $_name = [
        'requestId' => 'RequestId',
        'synchronizationJob' => 'SynchronizationJob',
    ];

    public function validate()
    {
        if (null !== $this->synchronizationJob) {
            $this->synchronizationJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->synchronizationJob) {
            $res['SynchronizationJob'] = null !== $this->synchronizationJob ? $this->synchronizationJob->toArray($noStream) : $this->synchronizationJob;
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

        if (isset($map['SynchronizationJob'])) {
            $model->synchronizationJob = synchronizationJob::fromMap($map['SynchronizationJob']);
        }

        return $model;
    }
}
