<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponseBody\detectResultList\traceInfo;

class detectResultList extends Model
{
    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var int
     */
    public $status;

    /**
     * @var traceInfo
     */
    public $traceInfo;
    protected $_name = [
        'riskResult' => 'RiskResult',
        'status' => 'Status',
        'traceInfo' => 'TraceInfo',
    ];

    public function validate()
    {
        if (null !== $this->traceInfo) {
            $this->traceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->traceInfo) {
            $res['TraceInfo'] = null !== $this->traceInfo ? $this->traceInfo->toArray($noStream) : $this->traceInfo;
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
        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TraceInfo'])) {
            $model->traceInfo = traceInfo::fromMap($map['TraceInfo']);
        }

        return $model;
    }
}
