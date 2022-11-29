<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result\riskVerifyResult;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var riskVerifyResult
     */
    public $riskVerifyResult;
    protected $_name = [
        'riskVerifyResult' => 'RiskVerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskVerifyResult) {
            $res['RiskVerifyResult'] = null !== $this->riskVerifyResult ? $this->riskVerifyResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskVerifyResult'])) {
            $model->riskVerifyResult = riskVerifyResult::fromMap($map['RiskVerifyResult']);
        }

        return $model;
    }
}
