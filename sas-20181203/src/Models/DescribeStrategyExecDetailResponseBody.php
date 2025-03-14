<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailResponseBody\failedEcsList;
use AlibabaCloud\Tea\Model;

class DescribeStrategyExecDetailResponseBody extends Model
{
    /**
     * @description The time when the baseline check ends.
     *
     * @example 2021-12-05 00:12:46
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of check items that failed to pass the baseline check. This type of check item is considered risk items.
     *
     * @example 94
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The servers on which risk items were detected.
     *
     * @var failedEcsList[]
     */
    public $failedEcsList;

    /**
     * @description The number of tasks that are **running **based on the baseline check policy.
     *
     * @example 0
     *
     * @var int
     */
    public $inProcessCount;

    /**
     * @description The execution progress of the baseline check policy.
     *
     * @example 100%
     *
     * @var string
     */
    public $percent;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 01611D72-1E33-53F5-A9A5-C81B5561970F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the baseline check. Valid values:
     *
     *   **Schedule**: automatic check that periodically runs
     *   **Manual**: intermediate check that is manually performed
     *
     * @example Manual
     *
     * @var string
     */
    public $source;

    /**
     * @description The time when the baseline check starts.
     *
     * @example 2021-12-05 00:12:16
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The number of check items that **passed** the baseline check.
     *
     * @example 81
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'endTime' => 'EndTime',
        'failCount' => 'FailCount',
        'failedEcsList' => 'FailedEcsList',
        'inProcessCount' => 'InProcessCount',
        'percent' => 'Percent',
        'requestId' => 'RequestId',
        'source' => 'Source',
        'startTime' => 'StartTime',
        'successCount' => 'SuccessCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->failedEcsList) {
            $res['FailedEcsList'] = [];
            if (null !== $this->failedEcsList && \is_array($this->failedEcsList)) {
                $n = 0;
                foreach ($this->failedEcsList as $item) {
                    $res['FailedEcsList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeStrategyExecDetailResponseBody
     */
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
                $n = 0;
                foreach ($map['FailedEcsList'] as $item) {
                    $model->failedEcsList[$n++] = null !== $item ? failedEcsList::fromMap($item) : $item;
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
