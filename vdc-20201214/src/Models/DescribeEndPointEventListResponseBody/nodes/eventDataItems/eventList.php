<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointEventListResponseBody\nodes\eventDataItems;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $acs;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @example 开始发布
     *
     * @var string
     */
    public $eventName;

    /**
     * @example USER
     *
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $sdk;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $streamType;

    /**
     * @var string
     */
    public $trackCode;

    /**
     * @var string
     */
    public $trackName;

    /**
     * @example 1615887686
     *
     * @var int
     */
    public $ts;

    /**
     * @var string
     */
    public $tsInMs;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'acs'        => 'Acs',
        'eventCode'  => 'EventCode',
        'eventName'  => 'EventName',
        'eventType'  => 'EventType',
        'os'         => 'Os',
        'sdk'        => 'Sdk',
        'streamName' => 'StreamName',
        'streamType' => 'StreamType',
        'trackCode'  => 'TrackCode',
        'trackName'  => 'TrackName',
        'ts'         => 'Ts',
        'tsInMs'     => 'TsInMs',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acs) {
            $res['Acs'] = $this->acs;
        }
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->sdk) {
            $res['Sdk'] = $this->sdk;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->trackCode) {
            $res['TrackCode'] = $this->trackCode;
        }
        if (null !== $this->trackName) {
            $res['TrackName'] = $this->trackName;
        }
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->tsInMs) {
            $res['TsInMs'] = $this->tsInMs;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acs'])) {
            $model->acs = $map['Acs'];
        }
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Sdk'])) {
            $model->sdk = $map['Sdk'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TrackCode'])) {
            $model->trackCode = $map['TrackCode'];
        }
        if (isset($map['TrackName'])) {
            $model->trackName = $map['TrackName'];
        }
        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }
        if (isset($map['TsInMs'])) {
            $model->tsInMs = $map['TsInMs'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
