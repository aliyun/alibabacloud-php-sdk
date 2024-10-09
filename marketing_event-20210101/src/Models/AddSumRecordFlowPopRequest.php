<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class AddSumRecordFlowPopRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4546
     *
     * @var string
     */
    public $activityId;

    /**
     * @example 4546-100000
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example 会议名称
     *
     * @var string
     */
    public $conferenceName;

    /**
     * @description This parameter is required.
     *
     * @example Z10
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @example 入口名称
     *
     * @var string
     */
    public $entryName;

    /**
     * @example 429005111100000
     *
     * @var string
     */
    public $idcard;

    /**
     * @description This parameter is required.
     *
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $signTime;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'activityId'     => 'ActivityId',
        'code'           => 'Code',
        'conferenceName' => 'ConferenceName',
        'deviceId'       => 'DeviceId',
        'entryName'      => 'EntryName',
        'idcard'         => 'Idcard',
        'signTime'       => 'SignTime',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddSumRecordFlowPopRequest
     */
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
