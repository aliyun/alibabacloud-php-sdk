<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListAttemptsRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $attemptId;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $caseId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queueId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentId'    => 'AgentId',
        'attemptId'  => 'AttemptId',
        'callee'     => 'Callee',
        'caller'     => 'Caller',
        'campaignId' => 'CampaignId',
        'caseId'     => 'CaseId',
        'contactId'  => 'ContactId',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'queueId'    => 'QueueId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAttemptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
