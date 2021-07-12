<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ResumeVsStreamRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $liveStreamType;

    /**
     * @var string
     */
    public $controlStreamAction;
    protected $_name = [
        'ownerId'             => 'OwnerId',
        'domainName'          => 'DomainName',
        'appName'             => 'AppName',
        'streamName'          => 'StreamName',
        'liveStreamType'      => 'LiveStreamType',
        'controlStreamAction' => 'ControlStreamAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->liveStreamType) {
            $res['LiveStreamType'] = $this->liveStreamType;
        }
        if (null !== $this->controlStreamAction) {
            $res['ControlStreamAction'] = $this->controlStreamAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumeVsStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['LiveStreamType'])) {
            $model->liveStreamType = $map['LiveStreamType'];
        }
        if (isset($map['ControlStreamAction'])) {
            $model->controlStreamAction = $map['ControlStreamAction'];
        }

        return $model;
    }
}
