<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models\ListApiCallDailyDetailResult;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $avgLatency;

    /**
     * @var string
     */
    public $billDate;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $p90Latency;

    /**
     * @var int
     */
    public $p95Latency;

    /**
     * @var int
     */
    public $requestMaxQps;

    /**
     * @var string
     */
    public $subAccountId;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'apiName' => 'apiName',
        'avgLatency' => 'avgLatency',
        'billDate' => 'billDate',
        'engineType' => 'engineType',
        'failedCount' => 'failedCount',
        'p90Latency' => 'p90Latency',
        'p95Latency' => 'p95Latency',
        'requestMaxQps' => 'requestMaxQps',
        'subAccountId' => 'subAccountId',
        'successCount' => 'successCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->avgLatency) {
            $res['avgLatency'] = $this->avgLatency;
        }

        if (null !== $this->billDate) {
            $res['billDate'] = $this->billDate;
        }

        if (null !== $this->engineType) {
            $res['engineType'] = $this->engineType;
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->p90Latency) {
            $res['p90Latency'] = $this->p90Latency;
        }

        if (null !== $this->p95Latency) {
            $res['p95Latency'] = $this->p95Latency;
        }

        if (null !== $this->requestMaxQps) {
            $res['requestMaxQps'] = $this->requestMaxQps;
        }

        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
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
        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['avgLatency'])) {
            $model->avgLatency = $map['avgLatency'];
        }

        if (isset($map['billDate'])) {
            $model->billDate = $map['billDate'];
        }

        if (isset($map['engineType'])) {
            $model->engineType = $map['engineType'];
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['p90Latency'])) {
            $model->p90Latency = $map['p90Latency'];
        }

        if (isset($map['p95Latency'])) {
            $model->p95Latency = $map['p95Latency'];
        }

        if (isset($map['requestMaxQps'])) {
            $model->requestMaxQps = $map['requestMaxQps'];
        }

        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        return $model;
    }
}
