<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailResponseBody\failedEcsList;

class DescribeStrategyExecDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $failCount;
    /**
     * @var failedEcsList[]
     */
    public $failedEcsList;
    /**
     * @var int
     */
    public $inProcessCount;
    /**
     * @var string
     */
    public $percent;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'endTime'        => 'EndTime',
        'failCount'      => 'FailCount',
        'failedEcsList'  => 'FailedEcsList',
        'inProcessCount' => 'InProcessCount',
        'percent'        => 'Percent',
        'requestId'      => 'RequestId',
        'source'         => 'Source',
        'startTime'      => 'StartTime',
        'successCount'   => 'SuccessCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedEcsList)) {
            Model::validateArray($this->failedEcsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->failedEcsList) {
            if (\is_array($this->failedEcsList)) {
                $res['FailedEcsList'] = [];
                $n1                   = 0;
                foreach ($this->failedEcsList as $item1) {
                    $res['FailedEcsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inProcessCount) {
            $res['InProcessCount'] = $this->inProcessCount;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['FailedEcsList'])) {
            if (!empty($map['FailedEcsList'])) {
                $model->failedEcsList = [];
                $n1                   = 0;
                foreach ($map['FailedEcsList'] as $item1) {
                    $model->failedEcsList[$n1++] = failedEcsList::fromMap($item1);
                }
            }
        }

        if (isset($map['InProcessCount'])) {
            $model->inProcessCount = $map['InProcessCount'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
