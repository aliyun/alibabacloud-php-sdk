<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureSearchJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1614850763000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1614850763692
     *
     * @var int
     */
    public $endTime;

    /**
     * @example b3786935a71442efae014c7b2212****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 3
     *
     * @var int
     */
    public $jobStatus;

    /**
     * @example http://XXX.XXX.com/1.jpg
     *
     * @var string
     */
    public $searchPicUrl;

    /**
     * @example 1614814763692
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'endTime'      => 'EndTime',
        'jobId'        => 'JobId',
        'jobStatus'    => 'JobStatus',
        'searchPicUrl' => 'SearchPicUrl',
        'startTime'    => 'StartTime',
        'threshold'    => 'Threshold',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->searchPicUrl) {
            $res['SearchPicUrl'] = $this->searchPicUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['SearchPicUrl'])) {
            $model->searchPicUrl = $map['SearchPicUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
