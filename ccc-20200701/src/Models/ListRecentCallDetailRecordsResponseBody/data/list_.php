<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRecentCallDetailRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $contactDisposition;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var string
     */
    public $agentIds;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $callDuration;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $skillGroupIds;
    protected $_name = [
        'startTime'          => 'StartTime',
        'contactDisposition' => 'ContactDisposition',
        'contactType'        => 'ContactType',
        'agentIds'           => 'AgentIds',
        'contactId'          => 'ContactId',
        'callDuration'       => 'CallDuration',
        'callingNumber'      => 'CallingNumber',
        'duration'           => 'Duration',
        'instanceId'         => 'InstanceId',
        'calledNumber'       => 'CalledNumber',
        'skillGroupIds'      => 'SkillGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }

        return $model;
    }
}
