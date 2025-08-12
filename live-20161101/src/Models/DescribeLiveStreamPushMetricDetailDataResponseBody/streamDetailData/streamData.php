<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPushMetricDetailDataResponseBody\streamDetailData;

use AlibabaCloud\Dara\Model;

class streamData extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var float
     */
    public $reqBps;

    /**
     * @var int
     */
    public $reqTraffic;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'appName' => 'AppName',
        'reqBps' => 'ReqBps',
        'reqTraffic' => 'ReqTraffic',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->reqBps) {
            $res['ReqBps'] = $this->reqBps;
        }

        if (null !== $this->reqTraffic) {
            $res['ReqTraffic'] = $this->reqTraffic;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ReqBps'])) {
            $model->reqBps = $map['ReqBps'];
        }

        if (isset($map['ReqTraffic'])) {
            $model->reqTraffic = $map['ReqTraffic'];
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
