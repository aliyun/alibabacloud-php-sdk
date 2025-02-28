<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponseBody\trafficControlTargetItemReportDetail;

class QueryTrafficControlTargetItemReportDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var trafficControlTargetItemReportDetail
     */
    public $trafficControlTargetItemReportDetail;
    protected $_name = [
        'requestId'                            => 'RequestId',
        'trafficControlTargetItemReportDetail' => 'TrafficControlTargetItemReportDetail',
    ];

    public function validate()
    {
        if (null !== $this->trafficControlTargetItemReportDetail) {
            $this->trafficControlTargetItemReportDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficControlTargetItemReportDetail) {
            $res['TrafficControlTargetItemReportDetail'] = null !== $this->trafficControlTargetItemReportDetail ? $this->trafficControlTargetItemReportDetail->toArray($noStream) : $this->trafficControlTargetItemReportDetail;
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

        if (isset($map['TrafficControlTargetItemReportDetail'])) {
            $model->trafficControlTargetItemReportDetail = trafficControlTargetItemReportDetail::fromMap($map['TrafficControlTargetItemReportDetail']);
        }

        return $model;
    }
}
