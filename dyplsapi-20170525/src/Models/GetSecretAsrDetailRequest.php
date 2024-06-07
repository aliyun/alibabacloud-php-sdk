<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetSecretAsrDetailRequest extends Model
{
    /**
     * @description The ID of the call record.
     *
     * You can log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view **Call Record ID** on the **Call Record Query** page.
     *
     * This parameter is required.
     * @example 225625****
     *
     * @var string
     */
    public $callId;

    /**
     * @description The call initiation time in the call record.
     *
     * You can log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account). View **Call Initiated At** on the **Call Record Query** page, or view the call_time field in the Call Detail Record (CDR) receipt.
     *
     * This parameter is required.
     * @example 2019-03-05 12:00:00
     *
     * @var string
     */
    public $callTime;

    /**
     * @description The key of the phone number pool.
     *
     * You can log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * This parameter is required.
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
