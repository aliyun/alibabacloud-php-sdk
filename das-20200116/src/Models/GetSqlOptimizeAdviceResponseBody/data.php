<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlOptimizeAdviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the task was created. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1632303861000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The URL that is used to download the file.
     *
     * @example https://das-sql-optimize.oss-cn-shanghai.aliyuncs.com/adb/oss_sql_optimize_advice/1083*******
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The time when the file expires. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The file expires three days after the task is created.
     * @example 1632563061000
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **RUNNING**: The task is running.
     *   **FINISH**: The task is complete.
     *   **FAILED**: The task failed.
     *
     * @example FINISH
     *
     * @var string
     */
    public $status;

    /**
     * @description The status code of the task. Valid values:
     *
     *   **NO_DATA**: No data is returned.
     *   **INTERNAL_ERROR**: An internal error occurred.
     *   **SUCCESS**: The task is successful.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The task ID.
     *
     * @example 2021091710461519216****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'downloadUrl' => 'DownloadUrl',
        'expireTime'  => 'ExpireTime',
        'status'      => 'Status',
        'statusCode'  => 'StatusCode',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
