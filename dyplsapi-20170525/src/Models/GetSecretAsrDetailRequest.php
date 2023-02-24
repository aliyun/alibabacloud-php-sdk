<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetSecretAsrDetailRequest extends Model
{
    /**
     * @example 225625****
     *
     * @var string
     */
    public $callId;

    /**
     * @example 2019-03-05 12:00:00
     *
     * @var string
     */
    public $callTime;

    /**
     * @example FC2267****
     *
     * @var string
     */
    public $poolKey;
    protected $_name = [
        'callId'   => 'CallId',
        'callTime' => 'CallTime',
        'poolKey'  => 'PoolKey',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretAsrDetailRequest
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

        return $model;
    }
}
