<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderSyncJobResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $syncedUserCount;

    /**
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentStep' => 'currentStep',
        'failureReason' => 'failureReason',
        'status' => 'status',
        'syncedUserCount' => 'syncedUserCount',
        'synchronizationJobId' => 'synchronizationJobId',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentStep) {
            $res['currentStep'] = $this->currentStep;
        }

        if (null !== $this->failureReason) {
            $res['failureReason'] = $this->failureReason;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->syncedUserCount) {
            $res['syncedUserCount'] = $this->syncedUserCount;
        }

        if (null !== $this->synchronizationJobId) {
            $res['synchronizationJobId'] = $this->synchronizationJobId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['currentStep'])) {
            $model->currentStep = $map['currentStep'];
        }

        if (isset($map['failureReason'])) {
            $model->failureReason = $map['failureReason'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['syncedUserCount'])) {
            $model->syncedUserCount = $map['syncedUserCount'];
        }

        if (isset($map['synchronizationJobId'])) {
            $model->synchronizationJobId = $map['synchronizationJobId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
