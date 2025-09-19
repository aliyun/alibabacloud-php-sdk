<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes;

class DescribeRiskTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskTypes[]
     */
    public $riskTypes;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskTypes' => 'RiskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->riskTypes)) {
            Model::validateArray($this->riskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskTypes) {
            if (\is_array($this->riskTypes)) {
                $res['RiskTypes'] = [];
                $n1 = 0;
                foreach ($this->riskTypes as $item1) {
                    $res['RiskTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskTypes'])) {
            if (!empty($map['RiskTypes'])) {
                $model->riskTypes = [];
                $n1 = 0;
                foreach ($map['RiskTypes'] as $item1) {
                    $model->riskTypes[$n1] = riskTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
