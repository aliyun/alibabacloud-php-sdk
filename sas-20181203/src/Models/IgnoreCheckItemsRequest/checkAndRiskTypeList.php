<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest;

use AlibabaCloud\Tea\Model;

class checkAndRiskTypeList extends Model
{
    /**
     * @example 52
     *
     * @var int
     */
    public $checkId;

    /**
     * @example hc_best_secruity
     *
     * @var string
     */
    public $riskType;
    protected $_name = [
        'checkId'  => 'CheckId',
        'riskType' => 'RiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkAndRiskTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
