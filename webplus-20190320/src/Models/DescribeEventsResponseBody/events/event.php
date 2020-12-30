<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event\msgParams;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event\objectAttrs;
use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @var string
     */
    public $primaryUserName;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $enventName;

    /**
     * @var int
     */
    public $eventTimestamp;

    /**
     * @var string
     */
    public $secondUserName;

    /**
     * @var string
     */
    public $msgCode;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $eventMessage;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var objectAttrs
     */
    public $objectAttrs;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var msgParams
     */
    public $msgParams;

    /**
     * @var string
     */
    public $primaryUserId;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $secondUserId;
    protected $_name = [
        'primaryUserName' => 'PrimaryUserName',
        'objectType'      => 'ObjectType',
        'enventName'      => 'EnventName',
        'eventTimestamp'  => 'EventTimestamp',
        'secondUserName'  => 'SecondUserName',
        'msgCode'         => 'MsgCode',
        'objectName'      => 'ObjectName',
        'eventMessage'    => 'EventMessage',
        'eventId'         => 'EventId',
        'objectAttrs'     => 'ObjectAttrs',
        'appId'           => 'AppId',
        'eventLevel'      => 'EventLevel',
        'objectId'        => 'ObjectId',
        'msgParams'       => 'MsgParams',
        'primaryUserId'   => 'PrimaryUserId',
        'envId'           => 'EnvId',
        'traceId'         => 'TraceId',
        'secondUserId'    => 'SecondUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primaryUserName) {
            $res['PrimaryUserName'] = $this->primaryUserName;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->enventName) {
            $res['EnventName'] = $this->enventName;
        }
        if (null !== $this->eventTimestamp) {
            $res['EventTimestamp'] = $this->eventTimestamp;
        }
        if (null !== $this->secondUserName) {
            $res['SecondUserName'] = $this->secondUserName;
        }
        if (null !== $this->msgCode) {
            $res['MsgCode'] = $this->msgCode;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->eventMessage) {
            $res['EventMessage'] = $this->eventMessage;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->objectAttrs) {
            $res['ObjectAttrs'] = null !== $this->objectAttrs ? $this->objectAttrs->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->msgParams) {
            $res['MsgParams'] = null !== $this->msgParams ? $this->msgParams->toMap() : null;
        }
        if (null !== $this->primaryUserId) {
            $res['PrimaryUserId'] = $this->primaryUserId;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->secondUserId) {
            $res['SecondUserId'] = $this->secondUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryUserName'])) {
            $model->primaryUserName = $map['PrimaryUserName'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['EnventName'])) {
            $model->enventName = $map['EnventName'];
        }
        if (isset($map['EventTimestamp'])) {
            $model->eventTimestamp = $map['EventTimestamp'];
        }
        if (isset($map['SecondUserName'])) {
            $model->secondUserName = $map['SecondUserName'];
        }
        if (isset($map['MsgCode'])) {
            $model->msgCode = $map['MsgCode'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['EventMessage'])) {
            $model->eventMessage = $map['EventMessage'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['ObjectAttrs'])) {
            $model->objectAttrs = objectAttrs::fromMap($map['ObjectAttrs']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['MsgParams'])) {
            $model->msgParams = msgParams::fromMap($map['MsgParams']);
        }
        if (isset($map['PrimaryUserId'])) {
            $model->primaryUserId = $map['PrimaryUserId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['SecondUserId'])) {
            $model->secondUserId = $map['SecondUserId'];
        }

        return $model;
    }
}
