<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class QueryInfoFromMdpResponseBody extends Model
{
    /**
     * @example {\"db0797452ccafce84d7c151eb81596099bda3f097693d1e18b588804e6742ced\":{\"riskScore\":\"3\"}}
     *
     * @var string
     */
    public $data;

    /**
     * @example 11E66B29-9E5E-5C10-B64E-B5A0E0F26355
     *
     * @var string
     */
    public $requestId;

    /**
     * @example OK
     *
     * @var int
     */
    public $resultCode;

    /**
     * @example SYSTEM_ERROR
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'          => 'Data',
        'requestId'     => 'RequestId',
        'resultCode'    => 'ResultCode',
        'resultMessage' => 'ResultMessage',
        'success'       => 'Success',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInfoFromMdpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
