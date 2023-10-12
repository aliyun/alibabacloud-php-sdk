<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTaskReportsResponseBody\inspectionTask;
use AlibabaCloud\Tea\Model;

class ListInspectionTaskReportsResponseBody extends Model
{
    /**
     * @var inspectionTask[]
     */
    public $inspectionTask;

    /**
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
            $res['InspectionTask'] = [];
            if (null !== $this->inspectionTask && \is_array($this->inspectionTask)) {
                $n = 0;
                foreach ($this->inspectionTask as $item) {
                    $res['InspectionTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInspectionTaskReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionTask'])) {
            if (!empty($map['InspectionTask'])) {
                $model->inspectionTask = [];
                $n                     = 0;
                foreach ($map['InspectionTask'] as $item) {
                    $model->inspectionTask[$n++] = null !== $item ? inspectionTask::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
