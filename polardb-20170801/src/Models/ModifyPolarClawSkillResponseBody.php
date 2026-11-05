<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyPolarClawSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $evaluateStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $riskDetail;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'evaluateStatus' => 'EvaluateStatus',
        'requestId' => 'RequestId',
        'riskDetail' => 'RiskDetail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->evaluateStatus) {
            $res['EvaluateStatus'] = $this->evaluateStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskDetail) {
            $res['RiskDetail'] = $this->riskDetail;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['EvaluateStatus'])) {
            $model->evaluateStatus = $map['EvaluateStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskDetail'])) {
            $model->riskDetail = $map['RiskDetail'];
        }

        return $model;
    }
}
