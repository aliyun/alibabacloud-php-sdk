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
    public $agentNames;

    /**
     * @var agents
     */
    public $agents;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $contactDisposition;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $extraAttr;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var recordings
     */
    public $recordings;

    /**
     * @var int
     */
    public $satisfaction;

    /**
     * @var string
     */
    public $satisfactionDesc;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentNames'         => 'AgentNames',
        'agents'             => 'Agents',
        'calledNumber'       => 'CalledNumber',
        'callingNumber'      => 'CallingNumber',
        'contactDisposition' => 'ContactDisposition',
        'contactId'          => 'ContactId',
        'contactType'        => 'ContactType',
        'duration'           => 'Duration',
        'extraAttr'          => 'ExtraAttr',
        'feedback'           => 'Feedback',
        'instanceId'         => 'InstanceId',
        'recordings'         => 'Recordings',
        'satisfaction'       => 'Satisfaction',
        'satisfactionDesc'   => 'SatisfactionDesc',
        'skillGroupNames'    => 'SkillGroupNames',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }
        if (null !== $this->agents) {
            $res['Agents'] = null !== $this->agents ? $this->agents->toMap() : null;
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
        if (null !== $this->extraAttr) {
            $res['ExtraAttr'] = $this->extraAttr;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->recordings) {
            $res['Recordings'] = null !== $this->recordings ? $this->recordings->toMap() : null;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->satisfactionDesc) {
            $res['SatisfactionDesc'] = $this->satisfactionDesc;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }
        if (isset($map['Agents'])) {
            $model->agents = agents::fromMap($map['Agents']);
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
        if (isset($map['ExtraAttr'])) {
            $model->extraAttr = $map['ExtraAttr'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Recordings'])) {
            $model->recordings = recordings::fromMap($map['Recordings']);
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['SatisfactionDesc'])) {
            $model->satisfactionDesc = $map['SatisfactionDesc'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
