<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class CreateVmcoreDiagnosisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $debuginfoCommonUrl;

    /**
     * @var string
     */
    public $debuginfoUrl;

    /**
     * @var string
     */
    public $dmesgUrl;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $vmcoreUrl;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'debuginfoCommonUrl' => 'debuginfoCommonUrl',
        'debuginfoUrl' => 'debuginfoUrl',
        'dmesgUrl' => 'dmesgUrl',
        'taskType' => 'taskType',
        'vmcoreUrl' => 'vmcoreUrl',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->debuginfoCommonUrl) {
            $res['debuginfoCommonUrl'] = $this->debuginfoCommonUrl;
        }

        if (null !== $this->debuginfoUrl) {
            $res['debuginfoUrl'] = $this->debuginfoUrl;
        }

        if (null !== $this->dmesgUrl) {
            $res['dmesgUrl'] = $this->dmesgUrl;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->vmcoreUrl) {
            $res['vmcoreUrl'] = $this->vmcoreUrl;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['debuginfoCommonUrl'])) {
            $model->debuginfoCommonUrl = $map['debuginfoCommonUrl'];
        }

        if (isset($map['debuginfoUrl'])) {
            $model->debuginfoUrl = $map['debuginfoUrl'];
        }

        if (isset($map['dmesgUrl'])) {
            $model->dmesgUrl = $map['dmesgUrl'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['vmcoreUrl'])) {
            $model->vmcoreUrl = $map['vmcoreUrl'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
