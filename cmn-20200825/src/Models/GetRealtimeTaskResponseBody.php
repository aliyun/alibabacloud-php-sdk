<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetRealtimeTaskResponseBody\inspectionTask;
use AlibabaCloud\Tea\Model;

class GetRealtimeTaskResponseBody extends Model
{
    /**
     * @var inspectionTask
     */
    public $inspectionTask;

    /**
     * @example AC8F05E6-AFBB-4ABE-B75E-A6539A9BAAA8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inspectionTask' => 'InspectionTask',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionTask) {
            $res['InspectionTask'] = null !== $this->inspectionTask ? $this->inspectionTask->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealtimeTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionTask'])) {
            $model->inspectionTask = inspectionTask::fromMap($map['InspectionTask']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
