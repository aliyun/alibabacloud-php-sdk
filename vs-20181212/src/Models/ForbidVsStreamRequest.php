<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ForbidVsStreamRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $controlStreamAction;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $liveStreamType;

    /**
     * @var string
     */
    public $oneshot;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resumeTime;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'             => 'AppName',
        'controlStreamAction' => 'ControlStreamAction',
        'domainName'          => 'DomainName',
        'liveStreamType'      => 'LiveStreamType',
        'oneshot'             => 'Oneshot',
        'ownerId'             => 'OwnerId',
        'resumeTime'          => 'ResumeTime',
        'streamName'          => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->controlStreamAction) {
            $res['ControlStreamAction'] = $this->controlStreamAction;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveStreamType) {
            $res['LiveStreamType'] = $this->liveStreamType;
        }
        if (null !== $this->oneshot) {
            $res['Oneshot'] = $this->oneshot;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resumeTime) {
            $res['ResumeTime'] = $this->resumeTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ForbidVsStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ControlStreamAction'])) {
            $model->controlStreamAction = $map['ControlStreamAction'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LiveStreamType'])) {
            $model->liveStreamType = $map['LiveStreamType'];
        }
        if (isset($map['Oneshot'])) {
            $model->oneshot = $map['Oneshot'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResumeTime'])) {
            $model->resumeTime = $map['ResumeTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
