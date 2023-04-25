<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRecentCallDetailRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentIds;

    /**
     * @example 16
     *
     * @var string
     */
    public $callDuration;

    /**
     * @example 1332315****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 0533128****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example Success
     *
     * @var string
     */
    public $contactDisposition;

    /**
     * @example job-7660472242845****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example Outbound
     *
     * @var string
     */
    public $contactType;

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
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupIds;

    /**
     * @example 1532448000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentIds'           => 'AgentIds',
        'callDuration'       => 'CallDuration',
        'calledNumber'       => 'CalledNumber',
        'callingNumber'      => 'CallingNumber',
        'contactDisposition' => 'ContactDisposition',
        'contactId'          => 'ContactId',
        'contactType'        => 'ContactType',
        'duration'           => 'Duration',
        'instanceId'         => 'InstanceId',
        'skillGroupIds'      => 'SkillGroupIds',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
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
        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
