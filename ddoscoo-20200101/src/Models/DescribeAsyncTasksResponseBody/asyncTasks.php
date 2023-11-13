<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAsyncTasksResponseBody;

use AlibabaCloud\Tea\Model;

class asyncTasks extends Model
{
    /**
     * @description The end time of the task. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 157927362000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The start time of the task. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 156927362000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The ID of the job.
     *
     * @example 1
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The task parameter. The value is a JSON string. The returned field in the value varies based on the value of **TaskType**.
     *
     * If **TaskType** is set to **1**, **3**, **4**, **5**, or **6**, the following filed is returned:
     *
     *   **instanceId**: the ID of the instance. Data type: string.
     *
     * If **TaskType** is set to **2**, the following field is returned:
     *
     *   **domain**: the domain name of the website. Data type: string.
     *
     * @example {"instanceId": "ddoscoo-cn-mp91j1ao****"}
     *
     * @var string
     */
    public $taskParams;

    /**
     * @description The execution result of the task. The value is a JSON string. The returned fields in the value vary based on the value of **TaskType**.
     *
     * If **TaskType** is set to **1**, **3**, **4**, **5**, or **6**, the following fields are returned:
     *
     *   **instanceId**: the ID of the instance. Data type: string.
     *   **url**: the URL to download the exported file from Object Storage Service (OSS). Data type: string.
     *
     * If **TaskType** is set to **2**, the following fields are returned:
     *
     *   **domain**: the domain name of the website. Data type: string.
     *   **url**: the URL to download the exported file from OSS. Data type: string.
     *
     * @example {"instanceId": "ddoscoo-cn-mp91j1ao****","url": "https://****.oss-cn-beijing.aliyuncs.com/heap.bin?Expires=1584785140&OSSAccessKeyId=TMP.3KfzD82FyRJevJdEkRX6JEFHhbvRBBb75PZJnyJmksA2QkMm47xFAFDgMhEV8Nm6Vxr8xExMfiy9LsUFAcLcTBrN3r****&Signature=Sj8BNcsxJLE8l5qm4cjNlDt8gv****"}
     *
     * @var string
     */
    public $taskResult;

    /**
     * @description The status of the task. Valid values:
     *
     *   **0**: indicates that the task is being initialized.
     *   **1**: indicates that the task is in progress.
     *   **2**: indicates that the task is successful.
     *   **3**: indicates that the task failed.
     *
     * @example 2
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @description The type of the task. Valid values:
     *
     *   **1**: the task to export the port forwarding rules of an instance
     *   **2**: the task to export the forwarding rules of a website protected by an instance
     *   **3**: the task to export the sessions and health check settings of an instance
     *   **4**: the task to export the mitigation policies of an instance
     *   **5**: the task to download the blacklist for destination IP addresses of an instance
     *   **6**: the task to download the whitelist for destination IP addresses of an instance
     *
     * @example 5
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
        'taskId'     => 'TaskId',
        'taskParams' => 'TaskParams',
        'taskResult' => 'TaskResult',
        'taskStatus' => 'TaskStatus',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asyncTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
