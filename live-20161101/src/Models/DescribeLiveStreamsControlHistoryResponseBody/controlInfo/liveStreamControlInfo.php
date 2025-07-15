<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponseBody\controlInfo;

use AlibabaCloud\Tea\Model;

class liveStreamControlInfo extends Model
{
    /**
     * @description The name of the operation performed.
     *
     * @example DescribeLiveStreamsControlHistory
     *
     * @var string
     */
    public $action;

    /**
     * @description The IP address that is used by the client for live streaming.
     *
     * @example 10.207.XX.XX
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The name of the live stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The time when the operation was performed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-01T16:36:18Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'action' => 'Action',
        'clientIP' => 'ClientIP',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamControlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
