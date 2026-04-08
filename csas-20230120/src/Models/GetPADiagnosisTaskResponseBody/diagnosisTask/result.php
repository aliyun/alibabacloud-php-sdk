<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo;

class result extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var networkLinkInfo
     */
    public $networkLinkInfo;

    /**
     * @var policyInfo
     */
    public $policyInfo;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'flowId' => 'FlowId',
        'networkLinkInfo' => 'NetworkLinkInfo',
        'policyInfo' => 'PolicyInfo',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->networkLinkInfo) {
            $this->networkLinkInfo->validate();
        }
        if (null !== $this->policyInfo) {
            $this->policyInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->networkLinkInfo) {
            $res['NetworkLinkInfo'] = null !== $this->networkLinkInfo ? $this->networkLinkInfo->toArray($noStream) : $this->networkLinkInfo;
        }

        if (null !== $this->policyInfo) {
            $res['PolicyInfo'] = null !== $this->policyInfo ? $this->policyInfo->toArray($noStream) : $this->policyInfo;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['NetworkLinkInfo'])) {
            $model->networkLinkInfo = networkLinkInfo::fromMap($map['NetworkLinkInfo']);
        }

        if (isset($map['PolicyInfo'])) {
            $model->policyInfo = policyInfo::fromMap($map['PolicyInfo']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
