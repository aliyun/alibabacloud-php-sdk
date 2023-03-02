<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpRiskDataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the risky sensitive data returned. The information includes totalCount and opRiskDatas.
     *
     * opRiskDatas includes the following parameters:
     *
     *   sensType: the type of the sensitive data
     *   sensLevel: the sensitivity level of the sensitive data
     *   opType: the type of the operation
     *   sql: the SQL statement that is executed
     *   opAccount: the account that is used to perform the operation
     *   opTime: the time when the operation was performed
     *
     * @var string
     */
    public $riskData;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskData'  => 'RiskData',
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
        if (null !== $this->riskData) {
            $res['RiskData'] = $this->riskData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpRiskDataResponseBody
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
