<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryFinanceUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example 19
     *
     * @var int
     */
    public $costTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $innerErrorCode;

    /**
     * @var string
     */
    public $innerErrorMsg;

    /**
     * @description RPC ID
     *
     * @example 0.1.1
     *
     * @var string
     */
    public $rpcId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $traceId;

    /**
     * @example 10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'costTime'       => 'CostTime',
        'innerErrorCode' => 'InnerErrorCode',
        'innerErrorMsg'  => 'InnerErrorMsg',
        'rpcId'          => 'RpcId',
        'traceId'        => 'TraceId',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->innerErrorCode) {
            $res['InnerErrorCode'] = $this->innerErrorCode;
        }
        if (null !== $this->innerErrorMsg) {
            $res['InnerErrorMsg'] = $this->innerErrorMsg;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['InnerErrorCode'])) {
            $model->innerErrorCode = $map['InnerErrorCode'];
        }
        if (isset($map['InnerErrorMsg'])) {
            $model->innerErrorMsg = $map['InnerErrorMsg'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
