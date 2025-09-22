<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class TicketOrCredentialsSignInPopRequest extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $conferenceName;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $entryName;

    /**
     * @var string
     */
    public $idcard;

    /**
     * @var string
     */
    public $signTime;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'activityId' => 'ActivityId',
        'code' => 'Code',
        'conferenceName' => 'ConferenceName',
        'deviceId' => 'DeviceId',
        'entryName' => 'EntryName',
        'idcard' => 'Idcard',
        'signTime' => 'SignTime',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->conferenceName) {
            $res['ConferenceName'] = $this->conferenceName;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->entryName) {
            $res['EntryName'] = $this->entryName;
        }

        if (null !== $this->idcard) {
            $res['Idcard'] = $this->idcard;
        }

        if (null !== $this->signTime) {
            $res['SignTime'] = $this->signTime;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ConferenceName'])) {
            $model->conferenceName = $map['ConferenceName'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['EntryName'])) {
            $model->entryName = $map['EntryName'];
        }

        if (isset($map['Idcard'])) {
            $model->idcard = $map['Idcard'];
        }

        if (isset($map['SignTime'])) {
            $model->signTime = $map['SignTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
