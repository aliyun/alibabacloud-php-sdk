<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListJobInfoResponseBody;

use AlibabaCloud\Tea\Model;

class jobInfoList extends Model
{
    /**
     * @description The time when the task was complete.
     *
     * @example 2024-10-14T07:39:34Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the YYYY-MM-DDTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-10-14T07:39:25Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the task.
     *
     * @example 5c9dff751ba**********59d50a967f5
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The status of the task.
     *
     * @example TranscodeSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the user who submitted the task.
     *
     * @example 139109*****84930
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'createTime' => 'CreateTime',
        'jobId' => 'JobId',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
