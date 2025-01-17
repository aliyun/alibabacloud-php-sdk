<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;

class QueryIncidentTracingDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->tracingDetail) {
            $this->tracingDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tracingDetail) {
            $res['TracingDetail'] = null !== $this->tracingDetail ? $this->tracingDetail->toArray($noStream) : $this->tracingDetail;
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

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TracingDetail'])) {
            $model->tracingDetail = tracingDetail::fromMap($map['TracingDetail']);
        }

        return $model;
    }
}
