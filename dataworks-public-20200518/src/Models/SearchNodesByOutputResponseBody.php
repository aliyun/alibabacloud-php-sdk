<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SearchNodesByOutputResponseBody extends Model
{
    /**
     * @example { "test_0709_1.630003558_out": {  "nodeId": 21673,             "nodeName": "hour_sql",             "ownerId": 123123123124,             "cronExpress": "00 00 00-23/2 * * ?",             "repeatability": true,             "programType": "ODPS_SQL",             "projectId": 11111,             "schedulerType": "NORMAL",             "priority": 1,             "baselineId": 20001721,             "connection": "odps_first"         },         "test_0709_1.630003556_out": {             "nodeId": 21671,             "nodeName": "start",             "ownerId": 123141231231,             "cronExpress": "00 *\/10 00-23 * * ?",             "repeatability": true,             "programType": "VIRTUAL",             "projectId": 1111,             "schedulerType": "NORMAL",             "priority": 1,             "baselineId": 20001721         }     }
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @example Invalid.Tenant.ConnectionNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The connection does not exist.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example SDFSDFSDF-asdfDFSDF-SDFSDf-SDfSFD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'Data',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchNodesByOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
