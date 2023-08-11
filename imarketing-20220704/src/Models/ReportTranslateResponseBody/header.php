<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @description costTime
     *
     * @example 19
     *
     * @var int
     */
    public $costTime;

    /**
     * @description innerErrorCode
     *
     * @example P1000
     *
     * @var string
     */
    public $innerErrorCode;

    /**
     * @description innerErrorMsg
     *
     * @var string
     */
    public $innerErrorMsg;

    /**
     * @description rpcId
     *
     * @example xhx3mwagszdxb5lf
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description traceId
     *
     * @example xhx3mwa
     *
     * @var string
     */
    public $traceId;

    /**
     * @description version
     *
     * @example 9885db29-3406-456f-8160-2b8dfc42c1df
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
