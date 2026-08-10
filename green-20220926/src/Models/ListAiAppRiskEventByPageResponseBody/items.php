<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppRiskEventByPageResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventDesc;

    /**
     * @var string
     */
    public $eventDescEn;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $handleTime;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $labelDesc;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'channel' => 'Channel',
        'endTime' => 'EndTime',
        'eventCode' => 'EventCode',
        'eventDesc' => 'EventDesc',
        'eventDescEn' => 'EventDescEn',
        'eventId' => 'EventId',
        'eventName' => 'EventName',
        'handleTime' => 'HandleTime',
        'label' => 'Label',
        'labelDesc' => 'LabelDesc',
        'level' => 'Level',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }

        if (null !== $this->eventDescEn) {
            $res['EventDescEn'] = $this->eventDescEn;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->handleTime) {
            $res['HandleTime'] = $this->handleTime;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->labelDesc) {
            $res['LabelDesc'] = $this->labelDesc;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }

        if (isset($map['EventDescEn'])) {
            $model->eventDescEn = $map['EventDescEn'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['HandleTime'])) {
            $model->handleTime = $map['HandleTime'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['LabelDesc'])) {
            $model->labelDesc = $map['LabelDesc'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
