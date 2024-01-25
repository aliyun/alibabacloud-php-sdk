<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeInspectionThresholdRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $riskCode;
    protected $_name = [
        'operaUid' => 'OperaUid',
        'riskCode' => 'RiskCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInspectionThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }

        return $model;
    }
}
