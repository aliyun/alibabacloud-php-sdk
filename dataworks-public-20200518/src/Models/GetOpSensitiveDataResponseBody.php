<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpSensitiveDataResponseBody extends Model
{
    /**
     * @description The information about the access records of the sensitive data. The information includes totalCount and opRiskDatas. opRiskDatas includes the following parameters:
     *
     *   sensType: the type of the sensitive data.
     *   sensLevel: the sensitivity level of the sensitive data. A larger value indicates a higher sensitivity level.
     *   opType: the type of the operation.
     *   sql: the SQL statement that is executed.
     *   opAccount: the account that is used to perform the operation.
     *   opTime: the time when the operation was performed.
     *
     * @var string
     */
    public $opSensitiveData;

    /**
     * @description The request ID.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'opSensitiveData' => 'OpSensitiveData',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opSensitiveData) {
            $res['OpSensitiveData'] = $this->opSensitiveData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpSensitiveDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpSensitiveData'])) {
            $model->opSensitiveData = $map['OpSensitiveData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
