<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListVoicemailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 0533128****
     *
     * @var string
     */
    public $callee;

    /**
     * @example 073xxxx7539
     *
     * @var string
     */
    public $caller;

    /**
     * @var int
     */
    public $cdrStartTime;

    /**
     * @example job-125152394144124921
     *
     * @var string
     */
    public $contactId;

    /**
     * @example 16
     *
     * @var int
     */
    public $duration;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example voicemail-test
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $recordingDuration;

    /**
     * @example 1631440860000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'callee'            => 'Callee',
        'caller'            => 'Caller',
        'cdrStartTime'      => 'CdrStartTime',
        'contactId'         => 'ContactId',
        'duration'          => 'Duration',
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'recordingDuration' => 'RecordingDuration',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->cdrStartTime) {
            $res['CdrStartTime'] = $this->cdrStartTime;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CdrStartTime'])) {
            $model->cdrStartTime = $map['CdrStartTime'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
