<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\SparkAppInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Details of the applications. Fields in the response parameter:
     *
     * - **Data**: the data of the Spark application template.
     * - **EstimateExecutionCpuTimeInSeconds**: the amount of time it takes to consume CPU resources for running the Spark application. Unit: milliseconds.
     * - **LogRootPath**: the storage path of log files.
     * - **LastAttemptId**: the most recent attempt ID.
     * - **WebUiAddress**: the web UI URL.
     * - **SubmittedTimeInMillis**: the time when the Spark application was submitted. The time is displayed in the UNIX timestamp format. Unit: milliseconds.
     * - **StartedTimeInMillis**: the time when the Spark application was created. The time is displayed in the UNIX timestamp format. Unit: milliseconds.
     * - **LastUpdatedTimeInMillis**: the time when the Spark application was last updated. The time is displayed in the UNIX timestamp format. Unit: milliseconds.
     * - **TerminatedTimeInMillis**: the time when the Spark application task was terminated. The time is displayed in the UNIX timestamp format. Unit: milliseconds.
     * - **DBClusterId**: the ID of the cluster on which the Spark application runs.
     * - **ResourceGroupName**: the name of the job resource group.
     * - **DurationInMillis**: the amount of time it takes to run the Spark application. Unit: milliseconds.
     * @var SparkAppInfo[]
     */
    public $appInfoList;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appInfoList' => 'AppInfoList',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfoList) {
            $res['AppInfoList'] = [];
            if (null !== $this->appInfoList && \is_array($this->appInfoList)) {
                $n = 0;
                foreach ($this->appInfoList as $item) {
                    $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n                  = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? SparkAppInfo::fromMap($item) : $item;
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
