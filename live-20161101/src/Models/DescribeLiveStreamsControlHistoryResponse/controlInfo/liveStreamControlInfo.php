<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponse\controlInfo;

use AlibabaCloud\Tea\Model;

class liveStreamControlInfo extends Model
{
    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $clientIP;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'streamName' => 'StreamName',
        'clientIP'   => 'ClientIP',
        'action'     => 'Action',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('clientIP', $this->clientIP, true);
        Model::validateRequired('action', $this->action, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
