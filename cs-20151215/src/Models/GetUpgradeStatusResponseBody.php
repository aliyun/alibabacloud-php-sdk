<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetUpgradeStatusResponseBody extends Model
{
    /**
     * @description 错误信息描述。
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 预检查返回ID。
     *
     * @var string
     */
    public $precheckReportId;

    /**
     * @description 升级状态。
     *
     * @var string
     */
    public $status;

    /**
     * @description 升级任务执行到哪一步了。
     *
     * @var string
     */
    public $upgradeStep;
    protected $_name = [
        'errorMessage'     => 'error_message',
        'precheckReportId' => 'precheck_report_id',
        'status'           => 'status',
        'upgradeStep'      => 'upgrade_step',
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

        return $model;
    }
}
