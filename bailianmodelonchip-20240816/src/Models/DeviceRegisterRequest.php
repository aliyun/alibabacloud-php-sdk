<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class DeviceRegisterRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'appId' => 'appId',
        'nonce' => 'nonce',
        'requestTime' => 'requestTime',
        'signature' => 'signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->nonce) {
            $res['nonce'] = $this->nonce;
        }

        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['nonce'])) {
            $model->nonce = $map['nonce'];
        }

        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        return $model;
    }
}
