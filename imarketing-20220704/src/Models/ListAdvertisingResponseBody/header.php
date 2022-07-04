<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @description costTime
     *
     * @var int
     */
    public $costTime;

    /**
     * @description rpcId
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description traceId
     *
     * @var string
     */
    public $traceId;

    /**
     * @description version
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'costTime' => 'CostTime',
        'rpcId'    => 'RpcId',
        'traceId'  => 'TraceId',
        'version'  => 'Version',
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
