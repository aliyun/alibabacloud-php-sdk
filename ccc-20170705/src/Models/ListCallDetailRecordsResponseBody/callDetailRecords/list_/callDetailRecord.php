<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\recordings;
use AlibabaCloud\Tea\Model;

class callDetailRecord extends Model
{
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
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupIdList;

    /**
     * @var recordings
     */
    public $recordings;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $agentNames;

    /**
     * @var int
     */
    public $satisfaction;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var agents
     */
    public $agents;

    /**
     * @var string
     */
    public $satisfactionDesc;

    /**
     * @var string
     */
    public $contactId;

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
    public $skillGroupNames;

    /**
     * @var string
     */
    public $feedback;
    protected $_name = [
        'contactDisposition' => 'ContactDisposition',
        'contactType'        => 'ContactType',
        'instanceId'         => 'InstanceId',
        'skillGroupIdList'   => 'SkillGroupIdList',
        'recordings'         => 'Recordings',
        'calledNumber'       => 'CalledNumber',
        'agentNames'         => 'AgentNames',
        'satisfaction'       => 'Satisfaction',
        'startTime'          => 'StartTime',
        'agents'             => 'Agents',
        'satisfactionDesc'   => 'SatisfactionDesc',
        'contactId'          => 'ContactId',
        'callingNumber'      => 'CallingNumber',
        'duration'           => 'Duration',
        'skillGroupNames'    => 'SkillGroupNames',
        'feedback'           => 'Feedback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }
        if (null !== $this->recordings) {
            $res['Recordings'] = null !== $this->recordings ? $this->recordings->toMap() : null;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->agents) {
            $res['Agents'] = null !== $this->agents ? $this->agents->toMap() : null;
        }
        if (null !== $this->satisfactionDesc) {
            $res['SatisfactionDesc'] = $this->satisfactionDesc;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callDetailRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupIdList'])) {
            $model->skillGroupIdList = $map['SkillGroupIdList'];
        }
        if (isset($map['Recordings'])) {
            $model->recordings = recordings::fromMap($map['Recordings']);
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Agents'])) {
            $model->agents = agents::fromMap($map['Agents']);
        }
        if (isset($map['SatisfactionDesc'])) {
            $model->satisfactionDesc = $map['SatisfactionDesc'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        return $model;
    }
}
