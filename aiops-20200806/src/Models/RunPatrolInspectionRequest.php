<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class RunPatrolInspectionRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productCodes;

    /**
     * @var string
     */
    public $riskCodeList;
    protected $_name = [
        'operaUid'     => 'OperaUid',
        'productCodes' => 'ProductCodes',
        'riskCodeList' => 'RiskCodeList',
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
        if (null !== $this->productCodes) {
            $res['ProductCodes'] = $this->productCodes;
        }
        if (null !== $this->riskCodeList) {
            $res['RiskCodeList'] = $this->riskCodeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPatrolInspectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductCodes'])) {
            $model->productCodes = $map['ProductCodes'];
        }
        if (isset($map['RiskCodeList'])) {
            $model->riskCodeList = $map['RiskCodeList'];
        }

        return $model;
    }
}
