<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewayInstancesResponseBody\gatewayInstanceList;
use AlibabaCloud\Tea\Model;

class GetUserGatewayInstancesResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example Gateway exception, please launch local dg first
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @var gatewayInstanceList[]
     */
    public $gatewayInstanceList;

    /**
     * @example 514F794F-7E30-5DAA-97C0-0B0D75DA0259
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
        'code'                => 'Code',
        'errorMsg'            => 'ErrorMsg',
        'gatewayInstanceList' => 'GatewayInstanceList',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
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
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->gatewayInstanceList) {
            $res['GatewayInstanceList'] = [];
            if (null !== $this->gatewayInstanceList && \is_array($this->gatewayInstanceList)) {
                $n = 0;
                foreach ($this->gatewayInstanceList as $item) {
                    $res['GatewayInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GetUserGatewayInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GatewayInstanceList'])) {
            if (!empty($map['GatewayInstanceList'])) {
                $model->gatewayInstanceList = [];
                $n                          = 0;
                foreach ($map['GatewayInstanceList'] as $item) {
                    $model->gatewayInstanceList[$n++] = null !== $item ? gatewayInstanceList::fromMap($item) : $item;
                }
            }
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
