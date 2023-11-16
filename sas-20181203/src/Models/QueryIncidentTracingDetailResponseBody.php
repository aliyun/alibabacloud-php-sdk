<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;
use AlibabaCloud\Tea\Model;

class QueryIncidentTracingDetailResponseBody extends Model
{
    /**
     * @example D2956025-4E5C-529D-92B4-B2591DDED067
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @var tracingDetail
     */
    public $tracingDetail;
    protected $_name = [
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'tracingDetail' => 'TracingDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tracingDetail) {
            $res['TracingDetail'] = null !== $this->tracingDetail ? $this->tracingDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentTracingDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TracingDetail'])) {
            $model->tracingDetail = tracingDetail::fromMap($map['TracingDetail']);
        }

        return $model;
    }
}
