<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewaysResponseBody\gatewayList;
use AlibabaCloud\Tea\Model;

class GetUserGatewaysResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @example Gateway exception, please launch local dg first
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @var gatewayList
     */
    public $gatewayList;

    /**
     * @example 41FC4DFE-EA8A-5A56-A16C-F607C3409C79
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
        'code'        => 'Code',
        'count'       => 'Count',
        'errorMsg'    => 'ErrorMsg',
        'gatewayList' => 'GatewayList',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->gatewayList) {
            $res['GatewayList'] = null !== $this->gatewayList ? $this->gatewayList->toMap() : null;
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
     * @return GetUserGatewaysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GatewayList'])) {
            $model->gatewayList = gatewayList::fromMap($map['GatewayList']);
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
