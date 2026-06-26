<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolSyncJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolSyncJobResponseBody\synchronizationJob\jobSummary;

class synchronizationJob extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var jobSummary
     */
    public $jobSummary;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'endTime' => 'EndTime',
        'errorMessage' => 'ErrorMessage',
        'identityProviderType' => 'IdentityProviderType',
        'jobSummary' => 'JobSummary',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'synchronizationJobId' => 'SynchronizationJobId',
        'triggerType' => 'TriggerType',
    ];

    public function validate()
    {
        if (null !== $this->jobSummary) {
            $this->jobSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->jobSummary) {
            $res['JobSummary'] = null !== $this->jobSummary ? $this->jobSummary->toArray($noStream) : $this->jobSummary;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['JobSummary'])) {
            $model->jobSummary = jobSummary::fromMap($map['JobSummary']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
