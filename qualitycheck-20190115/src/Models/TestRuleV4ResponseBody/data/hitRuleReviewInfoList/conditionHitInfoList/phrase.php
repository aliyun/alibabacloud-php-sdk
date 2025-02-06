<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList;

use AlibabaCloud\Dara\Model;

class phrase extends Model
{
    /**
     * @var int
     */
    public $begin;
    /**
     * @var string
     */
    public $beginTime;
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var int
     */
    public $emotionFineGrainedValue;
    /**
     * @var int
     */
    public $emotionValue;
    /**
     * @var int
     */
    public $end;
    /**
     * @var int
     */
    public $hitStatus;
    /**
     * @var string
     */
    public $hourMinSec;
    /**
     * @var string
     */
    public $identity;
    /**
     * @var int
     */
    public $pid;
    /**
     * @var int
     */
    public $renterId;
    /**
     * @var string
     */
    public $role;
    /**
     * @var int
     */
    public $sid;
    /**
     * @var int
     */
    public $silenceDuration;
    /**
     * @var int
     */
    public $speechRate;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var string
     */
    public $words;
    protected $_name = [
        'begin'                   => 'Begin',
        'beginTime'               => 'BeginTime',
        'channelId'               => 'ChannelId',
        'emotionFineGrainedValue' => 'EmotionFineGrainedValue',
        'emotionValue'            => 'EmotionValue',
        'end'                     => 'End',
        'hitStatus'               => 'HitStatus',
        'hourMinSec'              => 'HourMinSec',
        'identity'                => 'Identity',
        'pid'                     => 'Pid',
        'renterId'                => 'RenterId',
        'role'                    => 'Role',
        'sid'                     => 'Sid',
        'silenceDuration'         => 'SilenceDuration',
        'speechRate'              => 'SpeechRate',
        'uuid'                    => 'Uuid',
        'words'                   => 'Words',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->emotionFineGrainedValue) {
            $res['EmotionFineGrainedValue'] = $this->emotionFineGrainedValue;
        }

        if (null !== $this->emotionValue) {
            $res['EmotionValue'] = $this->emotionValue;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->hitStatus) {
            $res['HitStatus'] = $this->hitStatus;
        }

        if (null !== $this->hourMinSec) {
            $res['HourMinSec'] = $this->hourMinSec;
        }

        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->renterId) {
            $res['RenterId'] = $this->renterId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        if (null !== $this->silenceDuration) {
            $res['SilenceDuration'] = $this->silenceDuration;
        }

        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->words) {
            $res['Words'] = $this->words;
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
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['EmotionFineGrainedValue'])) {
            $model->emotionFineGrainedValue = $map['EmotionFineGrainedValue'];
        }

        if (isset($map['EmotionValue'])) {
            $model->emotionValue = $map['EmotionValue'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['HitStatus'])) {
            $model->hitStatus = $map['HitStatus'];
        }

        if (isset($map['HourMinSec'])) {
            $model->hourMinSec = $map['HourMinSec'];
        }

        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RenterId'])) {
            $model->renterId = $map['RenterId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        if (isset($map['SilenceDuration'])) {
            $model->silenceDuration = $map['SilenceDuration'];
        }

        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }

        return $model;
    }
}
