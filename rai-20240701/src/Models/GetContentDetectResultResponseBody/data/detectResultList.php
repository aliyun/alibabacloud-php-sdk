<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class detectResultList extends Model
{
    /**
     * @var string
     */
    public $riskInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskResult;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'riskInfo'   => 'RiskInfo',
        'riskResult' => 'RiskResult',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskInfo) {
            $res['RiskInfo'] = $this->riskInfo;
        }
        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskInfo'])) {
            $model->riskInfo = $map['RiskInfo'];
        }
        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
