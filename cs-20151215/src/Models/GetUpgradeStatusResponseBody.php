<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponseBody\upgradeTask;
use AlibabaCloud\Tea\Model;

class GetUpgradeStatusResponseBody extends Model
{
    /**
     * @description The error message returned during the update.
     *
     * @example subject to actual return
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the precheck report.
     *
     * @example be4c8eb72de94d459ea7ace7c811d119
     *
     * @var string
     */
    public $precheckReportId;

    /**
     * @description The status of the update. Valid values:
     *
     *   `success`: The update is successful.
     *   `fail`: The update failed.
     *   `pause`: The update is paused.
     *   `running`: The update is in progress.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The current phase of the update. Valid values:
     *
     *   `not_start`: The update is not started.
     *   `prechecking`: The precheck is in progress.
     *   `upgrading`: The update is in progress.
     *   `pause`: The update is paused.
     *   `success`: The update is successful.
     *
     * @example prechecking
     *
     * @var string
     */
    public $upgradeStep;

    /**
     * @description The details of the update task.
     *
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
    }

    public function toMap()
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
            $res['upgrade_task'] = null !== $this->upgradeTask ? $this->upgradeTask->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUpgradeStatusResponseBody
     */
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
