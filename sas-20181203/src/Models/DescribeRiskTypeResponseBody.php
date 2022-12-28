<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskTypes) {
            $res['RiskTypes'] = [];
            if (null !== $this->riskTypes && \is_array($this->riskTypes)) {
                $n = 0;
                foreach ($this->riskTypes as $item) {
                    $res['RiskTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskTypes'])) {
            if (!empty($map['RiskTypes'])) {
                $model->riskTypes = [];
                $n                = 0;
                foreach ($map['RiskTypes'] as $item) {
                    $model->riskTypes[$n++] = null !== $item ? riskTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
