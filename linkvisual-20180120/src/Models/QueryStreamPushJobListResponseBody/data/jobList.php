<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryStreamPushJobListResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobType;

    /**
     * @var int
     */
    public $pushStatus;

    /**
     * @var string
     */
    public $pushUrl;

    /**
     * @var int
     */
    public $streamType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'jobId'      => 'JobId',
        'jobType'    => 'JobType',
        'pushStatus' => 'PushStatus',
        'pushUrl'    => 'PushUrl',
        'streamType' => 'StreamType',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->pushStatus) {
            $res['PushStatus'] = $this->pushStatus;
        }
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['PushStatus'])) {
            $model->pushStatus = $map['PushStatus'];
        }
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        return $model;
    }
}
