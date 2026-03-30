<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\Dara\Model;

class transcripts extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var bool
     */
    public $backchannels;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $controlParamsList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $extras;

    /**
     * @var bool
     */
    public $interrupted;

    /**
     * @var bool
     */
    public $legacy;

    /**
     * @var int
     */
    public $playedWords;

    /**
     * @var string
     */
    public $role;

    /**
     * @var bool
     */
    public $streamEnd;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var string
     */
    public $vendorParams;
    protected $_name = [
        'answer' => 'Answer',
        'backchannels' => 'Backchannels',
        'beginTime' => 'BeginTime',
        'controlParamsList' => 'ControlParamsList',
        'endTime' => 'EndTime',
        'eventTime' => 'EventTime',
        'extras' => 'Extras',
        'interrupted' => 'Interrupted',
        'legacy' => 'Legacy',
        'playedWords' => 'PlayedWords',
        'role' => 'Role',
        'streamEnd' => 'StreamEnd',
        'streamId' => 'StreamId',
        'utterance' => 'Utterance',
        'vendorParams' => 'VendorParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->backchannels) {
            $res['Backchannels'] = $this->backchannels;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->controlParamsList) {
            $res['ControlParamsList'] = $this->controlParamsList;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->extras) {
            $res['Extras'] = $this->extras;
        }

        if (null !== $this->interrupted) {
            $res['Interrupted'] = $this->interrupted;
        }

        if (null !== $this->legacy) {
            $res['Legacy'] = $this->legacy;
        }

        if (null !== $this->playedWords) {
            $res['PlayedWords'] = $this->playedWords;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->streamEnd) {
            $res['StreamEnd'] = $this->streamEnd;
        }

        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }

        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        if (null !== $this->vendorParams) {
            $res['VendorParams'] = $this->vendorParams;
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
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['Backchannels'])) {
            $model->backchannels = $map['Backchannels'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['ControlParamsList'])) {
            $model->controlParamsList = $map['ControlParamsList'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['Extras'])) {
            $model->extras = $map['Extras'];
        }

        if (isset($map['Interrupted'])) {
            $model->interrupted = $map['Interrupted'];
        }

        if (isset($map['Legacy'])) {
            $model->legacy = $map['Legacy'];
        }

        if (isset($map['PlayedWords'])) {
            $model->playedWords = $map['PlayedWords'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['StreamEnd'])) {
            $model->streamEnd = $map['StreamEnd'];
        }

        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        if (isset($map['VendorParams'])) {
            $model->vendorParams = $map['VendorParams'];
        }

        return $model;
    }
}
