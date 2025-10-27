<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Fnf\V20190315\Models\DescribeMapRunResponseBody\itemCounts;

class DescribeMapRunResponseBody extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $executionName;

    /**
     * @var itemCounts
     */
    public $itemCounts;

    /**
     * @var string
     */
    public $mapRunName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stoppedTime;

    /**
     * @var int
     */
    public $toleratedFailedCount;

    /**
     * @var float
     */
    public $toleratedFailedPercentage;
    protected $_name = [
        'concurrency' => 'Concurrency',
        'executionName' => 'ExecutionName',
        'itemCounts' => 'ItemCounts',
        'mapRunName' => 'MapRunName',
        'requestId' => 'RequestId',
        'startedTime' => 'StartedTime',
        'status' => 'Status',
        'stoppedTime' => 'StoppedTime',
        'toleratedFailedCount' => 'ToleratedFailedCount',
        'toleratedFailedPercentage' => 'ToleratedFailedPercentage',
    ];

    public function validate()
    {
        if (null !== $this->itemCounts) {
            $this->itemCounts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }

        if (null !== $this->itemCounts) {
            $res['ItemCounts'] = null !== $this->itemCounts ? $this->itemCounts->toArray($noStream) : $this->itemCounts;
        }

        if (null !== $this->mapRunName) {
            $res['MapRunName'] = $this->mapRunName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stoppedTime) {
            $res['StoppedTime'] = $this->stoppedTime;
        }

        if (null !== $this->toleratedFailedCount) {
            $res['ToleratedFailedCount'] = $this->toleratedFailedCount;
        }

        if (null !== $this->toleratedFailedPercentage) {
            $res['ToleratedFailedPercentage'] = $this->toleratedFailedPercentage;
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
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }

        if (isset($map['ItemCounts'])) {
            $model->itemCounts = itemCounts::fromMap($map['ItemCounts']);
        }

        if (isset($map['MapRunName'])) {
            $model->mapRunName = $map['MapRunName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StoppedTime'])) {
            $model->stoppedTime = $map['StoppedTime'];
        }

        if (isset($map['ToleratedFailedCount'])) {
            $model->toleratedFailedCount = $map['ToleratedFailedCount'];
        }

        if (isset($map['ToleratedFailedPercentage'])) {
            $model->toleratedFailedPercentage = $map['ToleratedFailedPercentage'];
        }

        return $model;
    }
}
