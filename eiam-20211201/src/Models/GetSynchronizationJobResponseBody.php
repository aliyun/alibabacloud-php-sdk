<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob;
use AlibabaCloud\Tea\Model;

class GetSynchronizationJobResponseBody extends Model
{
    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->synchronizationJob) {
            $res['SynchronizationJob'] = null !== $this->synchronizationJob ? $this->synchronizationJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSynchronizationJobResponseBody
     */
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
