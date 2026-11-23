<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseCreditUsageSummaryResponseBody\buckets;

class GetContextDatabaseCreditUsageSummaryResponseBody extends Model
{
    /**
     * @var buckets[]
     */
    public $buckets;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $totalCredits;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'buckets' => 'Buckets',
        'dimension' => 'Dimension',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'totalCredits' => 'TotalCredits',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->buckets)) {
            Model::validateArray($this->buckets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buckets) {
            if (\is_array($this->buckets)) {
                $res['Buckets'] = [];
                $n1 = 0;
                foreach ($this->buckets as $item1) {
                    $res['Buckets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->totalCredits) {
            $res['TotalCredits'] = $this->totalCredits;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Buckets'])) {
            if (!empty($map['Buckets'])) {
                $model->buckets = [];
                $n1 = 0;
                foreach ($map['Buckets'] as $item1) {
                    $model->buckets[$n1] = buckets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TotalCredits'])) {
            $model->totalCredits = $map['TotalCredits'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
