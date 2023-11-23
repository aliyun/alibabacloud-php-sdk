<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class GetSecretAsrInfoRequest extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callTime;

    /**
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $prodCode;
    protected $_name = [
        'callId'   => 'CallId',
        'callTime' => 'CallTime',
        'poolKey'  => 'PoolKey',
        'prodCode' => 'ProdCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretAsrInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        return $model;
    }
}
