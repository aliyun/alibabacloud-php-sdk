<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponseBody\data;

use AlibabaCloud\Dara\Model;

class detectResultList extends Model
{
    /**
     * @var string
     */
    public $riskInfo;

    /**
     * @var int
     */
    public $riskResult;
    protected $_name = [
        'riskInfo' => 'RiskInfo',
        'riskResult' => 'RiskResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskInfo) {
            $res['RiskInfo'] = $this->riskInfo;
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
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
        if (isset($map['RiskInfo'])) {
            $model->riskInfo = $map['RiskInfo'];
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        return $model;
    }
}
