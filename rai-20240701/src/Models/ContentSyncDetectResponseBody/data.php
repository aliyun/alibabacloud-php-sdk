<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    protected $_name = [
        'riskInfo'   => 'RiskInfo',
        'riskResult' => 'RiskResult',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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

        return $model;
    }
}
