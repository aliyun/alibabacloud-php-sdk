<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryDigitalHumanProjectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $estimatedDuration;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $runningTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subtitleUrl;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $videoLength;

    /**
     * @var int
     */
    public $waitingTime;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'estimatedDuration' => 'EstimatedDuration',
        'fileUrl'           => 'FileUrl',
        'id'                => 'Id',
        'intro'             => 'Intro',
        'runningTime'       => 'RunningTime',
        'status'            => 'Status',
        'subtitleUrl'       => 'SubtitleUrl',
        'title'             => 'Title',
        'videoLength'       => 'VideoLength',
        'waitingTime'       => 'WaitingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->estimatedDuration) {
            $res['EstimatedDuration'] = $this->estimatedDuration;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subtitleUrl) {
            $res['SubtitleUrl'] = $this->subtitleUrl;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoLength) {
            $res['VideoLength'] = $this->videoLength;
        }
        if (null !== $this->waitingTime) {
            $res['WaitingTime'] = $this->waitingTime;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EstimatedDuration'])) {
            $model->estimatedDuration = $map['EstimatedDuration'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubtitleUrl'])) {
            $model->subtitleUrl = $map['SubtitleUrl'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoLength'])) {
            $model->videoLength = $map['VideoLength'];
        }
        if (isset($map['WaitingTime'])) {
            $model->waitingTime = $map['WaitingTime'];
        }

        return $model;
    }
}
