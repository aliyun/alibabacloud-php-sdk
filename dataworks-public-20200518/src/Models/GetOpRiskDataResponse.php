<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpRiskDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $riskData;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskData'  => 'RiskData',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('riskData', $this->riskData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskData) {
            $res['RiskData'] = $this->riskData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpRiskDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskData'])) {
            $model->riskData = $map['RiskData'];
        }

        return $model;
    }
}
