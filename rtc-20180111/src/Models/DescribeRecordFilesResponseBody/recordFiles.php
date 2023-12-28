<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesResponseBody;

use AlibabaCloud\Tea\Model;

class recordFiles extends Model
{
    /**
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2020-10-02T17:36:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1800
     *
     * @var float
     */
    public $duration;

    /**
     * @example 2020-11-01T17:36:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2020-11-02T17:36:00Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @example http://rtc-demo.oss-cn-****.aliyuncs.com/record/10-15-1/****\/record-002_yourTaskId/example.m3u8
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'appId'      => 'AppId',
        'channelId'  => 'ChannelId',
        'createTime' => 'CreateTime',
        'duration'   => 'Duration',
        'startTime'  => 'StartTime',
        'stopTime'   => 'StopTime',
        'taskId'     => 'TaskId',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
