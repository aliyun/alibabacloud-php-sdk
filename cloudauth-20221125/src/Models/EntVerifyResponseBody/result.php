<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result\riskVerifyResult;

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
        if (null !== $this->riskVerifyResult) {
            $this->riskVerifyResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskVerifyResult) {
            $res['RiskVerifyResult'] = null !== $this->riskVerifyResult ? $this->riskVerifyResult->toArray($noStream) : $this->riskVerifyResult;
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
        if (isset($map['RiskVerifyResult'])) {
            $model->riskVerifyResult = riskVerifyResult::fromMap($map['RiskVerifyResult']);
        }

        return $model;
    }
}
