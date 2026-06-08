<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalProcessDefinition;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalTasks;

class processInstance extends Model
{
    /**
     * @var string
     */
    public $applicator;

    /**
     * @var string
     */
    public $applicatorName;

    /**
     * @var approvalProcessDefinition
     */
    public $approvalProcessDefinition;

    /**
     * @var approvalTasks[]
     */
    public $approvalTasks;

    /**
     * @var string
     */
    public $authErrorMessage;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var mixed
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'applicator' => 'Applicator',
        'applicatorName' => 'ApplicatorName',
        'approvalProcessDefinition' => 'ApprovalProcessDefinition',
        'approvalTasks' => 'ApprovalTasks',
        'authErrorMessage' => 'AuthErrorMessage',
        'id' => 'Id',
        'reason' => 'Reason',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (null !== $this->approvalProcessDefinition) {
            $this->approvalProcessDefinition->validate();
        }
        if (\is_array($this->approvalTasks)) {
            Model::validateArray($this->approvalTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicator) {
            $res['Applicator'] = $this->applicator;
        }

        if (null !== $this->applicatorName) {
            $res['ApplicatorName'] = $this->applicatorName;
        }

        if (null !== $this->approvalProcessDefinition) {
            $res['ApprovalProcessDefinition'] = null !== $this->approvalProcessDefinition ? $this->approvalProcessDefinition->toArray($noStream) : $this->approvalProcessDefinition;
        }

        if (null !== $this->approvalTasks) {
            if (\is_array($this->approvalTasks)) {
                $res['ApprovalTasks'] = [];
                $n1 = 0;
                foreach ($this->approvalTasks as $item1) {
                    $res['ApprovalTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authErrorMessage) {
            $res['AuthErrorMessage'] = $this->authErrorMessage;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Applicator'])) {
            $model->applicator = $map['Applicator'];
        }

        if (isset($map['ApplicatorName'])) {
            $model->applicatorName = $map['ApplicatorName'];
        }

        if (isset($map['ApprovalProcessDefinition'])) {
            $model->approvalProcessDefinition = approvalProcessDefinition::fromMap($map['ApprovalProcessDefinition']);
        }

        if (isset($map['ApprovalTasks'])) {
            if (!empty($map['ApprovalTasks'])) {
                $model->approvalTasks = [];
                $n1 = 0;
                foreach ($map['ApprovalTasks'] as $item1) {
                    $model->approvalTasks[$n1] = approvalTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthErrorMessage'])) {
            $model->authErrorMessage = $map['AuthErrorMessage'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
