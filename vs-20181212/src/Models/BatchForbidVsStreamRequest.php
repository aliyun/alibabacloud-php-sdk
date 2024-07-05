<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchForbidVsStreamRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example live/stream1,live/stream2
     *
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $controlStreamAction;

    /**
     * @description This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @example publisher
     *
     * @var string
     */
    public $liveStreamType;

    /**
     * @example yes
     *
     * @var string
     */
    public $oneshot;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 2015-12-01T17:37:00Z
     *
     * @var string
     */
    public $resumeTime;
    protected $_name = [
        'channel'             => 'Channel',
        'controlStreamAction' => 'ControlStreamAction',
        'domainName'          => 'DomainName',
        'liveStreamType'      => 'LiveStreamType',
        'oneshot'             => 'Oneshot',
        'ownerId'             => 'OwnerId',
        'resumeTime'          => 'ResumeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchForbidVsStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
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

        return $model;
    }
}
