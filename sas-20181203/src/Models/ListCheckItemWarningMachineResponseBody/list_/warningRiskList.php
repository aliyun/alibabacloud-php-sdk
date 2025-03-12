<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_;

use AlibabaCloud\Tea\Model;

class warningRiskList extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @example 72
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The name of the baseline.
     *
     * @example Alibaba Cloud Linux/Aliyun Linux 2 Baseline for China classified protection of cybersecurity-Level II
     *
     * @var string
     */
    public $riskName;
    protected $_name = [
        'riskId'   => 'RiskId',
        'riskName' => 'RiskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningRiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        return $model;
    }
}
