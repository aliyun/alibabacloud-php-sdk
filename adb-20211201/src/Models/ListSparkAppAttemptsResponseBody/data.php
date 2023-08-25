<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppAttemptsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\SparkAttemptInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the attempts. Fields in the response parameter:
     *
     *   **AttemptId**: the attempt ID.
     *
     *   **State**: the state of the Spark application. Valid values:
     *
     *   **SUBMITTED**
     *   **STARTING**
     *   **RUNNING**
     *   **FAILING**
     *   **FAILED**
     *   **KILLING**
     *   **KILLED**
     *   **SUCCEEDING**
     *   **COMPLETED**
     *   **FATAL**
     *   **UNKNOWN**
     *
     *   **Message**: the alert message that is returned. If no alert is generated, null is returned.
     *
     *   **Data**: the data of the Spark application template.
     *
     *   **EstimateExecutionCpuTimeInSeconds**: the amount of time it takes to consume CPU resources for running the Spark application. Unit: milliseconds.
     *
     *   **LogRootPath**: the storage path of log files.
     *
     *   **LastAttemptId**: the ID of the last attempt.
     *
     *   **WebUiAddress**: the web UI address.
     *
     *   **SubmittedTimeInMillis**: the time when the Spark application was submitted. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     *   **StartedTimeInMillis**: the time when the Spark application was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     *   **LastUpdatedTimeInMillis**: the time when the Spark application was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     *   **TerminatedTimeInMillis**: the time when the Spark application task was terminated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     *   **DBClusterId**: the ID of the cluster on which the Spark application runs.
     *
     *   **ResourceGroupName**: the name of the job resource group.
     *
     *   **DurationInMillis**: the amount of time it takes to run the Spark application. Unit: milliseconds.
     *
     * @var SparkAttemptInfo[]
     */
    public $attemptInfoList;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'attemptInfoList' => 'AttemptInfoList',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attemptInfoList) {
            $res['AttemptInfoList'] = [];
            if (null !== $this->attemptInfoList && \is_array($this->attemptInfoList)) {
                $n = 0;
                foreach ($this->attemptInfoList as $item) {
                    $res['AttemptInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttemptInfoList'])) {
            if (!empty($map['AttemptInfoList'])) {
                $model->attemptInfoList = [];
                $n                      = 0;
                foreach ($map['AttemptInfoList'] as $item) {
                    $model->attemptInfoList[$n++] = null !== $item ? SparkAttemptInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
