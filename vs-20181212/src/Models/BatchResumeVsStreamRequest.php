<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchResumeVsStreamRequest extends Model
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
    public $channel;

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
        'channel'             => 'Channel',
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
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
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
     * @return BatchResumeVsStreamRequest
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
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
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
