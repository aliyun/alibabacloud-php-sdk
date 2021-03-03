<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord\recordings;
use AlibabaCloud\Tea\Model;

class callDetailRecord extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $satisfaction;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var string
     */
    public $contactDisposition;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $agentNames;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $extraAttr;

    /**
     * @var string
     */
    public $satisfactionDesc;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var agents
     */
    public $agents;

    /**
     * @var recordings
     */
    public $recordings;
    protected $_name = [
        'contactId'          => 'ContactId',
        'startTime'          => 'StartTime',
        'duration'           => 'Duration',
        'satisfaction'       => 'Satisfaction',
        'contactType'        => 'ContactType',
        'contactDisposition' => 'ContactDisposition',
        'callingNumber'      => 'CallingNumber',
        'calledNumber'       => 'CalledNumber',
        'agentNames'         => 'AgentNames',
        'skillGroupNames'    => 'SkillGroupNames',
        'instanceId'         => 'InstanceId',
        'extraAttr'          => 'ExtraAttr',
        'satisfactionDesc'   => 'SatisfactionDesc',
        'feedback'           => 'Feedback',
        'agents'             => 'Agents',
        'recordings'         => 'Recordings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->extraAttr) {
            $res['ExtraAttr'] = $this->extraAttr;
        }
        if (null !== $this->satisfactionDesc) {
            $res['SatisfactionDesc'] = $this->satisfactionDesc;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->agents) {
            $res['Agents'] = null !== $this->agents ? $this->agents->toMap() : null;
        }
        if (null !== $this->recordings) {
            $res['Recordings'] = null !== $this->recordings ? $this->recordings->toMap() : null;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ExtraAttr'])) {
            $model->extraAttr = $map['ExtraAttr'];
        }
        if (isset($map['SatisfactionDesc'])) {
            $model->satisfactionDesc = $map['SatisfactionDesc'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Agents'])) {
            $model->agents = agents::fromMap($map['Agents']);
        }
        if (isset($map['Recordings'])) {
            $model->recordings = recordings::fromMap($map['Recordings']);
        }

        return $model;
    }
}
