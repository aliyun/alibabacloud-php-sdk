<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class GetSecretAsrDetailRequest extends Model
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
    protected $_name = [
        'callId'   => 'CallId',
        'callTime' => 'CallTime',
        'poolKey'  => 'PoolKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
