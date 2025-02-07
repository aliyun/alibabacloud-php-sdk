<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponseBody\upgradeTask;

class GetUpgradeStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $precheckReportId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $upgradeStep;
    /**
     * @var upgradeTask
     */
    public $upgradeTask;
    protected $_name = [
        'errorMessage'     => 'error_message',
        'precheckReportId' => 'precheck_report_id',
        'status'           => 'status',
        'upgradeStep'      => 'upgrade_step',
        'upgradeTask'      => 'upgrade_task',
    ];

    public function validate()
    {
        if (null !== $this->upgradeTask) {
            $this->upgradeTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }

        if (null !== $this->precheckReportId) {
            $res['precheck_report_id'] = $this->precheckReportId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->upgradeStep) {
            $res['upgrade_step'] = $this->upgradeStep;
        }

        if (null !== $this->upgradeTask) {
            $res['upgrade_task'] = null !== $this->upgradeTask ? $this->upgradeTask->toArray($noStream) : $this->upgradeTask;
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
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }

        if (isset($map['precheck_report_id'])) {
            $model->precheckReportId = $map['precheck_report_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['upgrade_step'])) {
            $model->upgradeStep = $map['upgrade_step'];
        }

        if (isset($map['upgrade_task'])) {
            $model->upgradeTask = upgradeTask::fromMap($map['upgrade_task']);
        }

        return $model;
    }
}
