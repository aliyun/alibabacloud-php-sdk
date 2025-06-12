<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class GetTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $deviceName;

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

    /**
     * @var string
     */
    public $tokenKey;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'appId' => 'appId',
        'deviceName' => 'deviceName',
        'nonce' => 'nonce',
        'requestTime' => 'requestTime',
        'signature' => 'signature',
        'tokenKey' => 'tokenKey',
        'tokenType' => 'tokenType',
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

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
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

        if (null !== $this->tokenKey) {
            $res['tokenKey'] = $this->tokenKey;
        }

        if (null !== $this->tokenType) {
            $res['tokenType'] = $this->tokenType;
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

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
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

        if (isset($map['tokenKey'])) {
            $model->tokenKey = $map['tokenKey'];
        }

        if (isset($map['tokenType'])) {
            $model->tokenType = $map['tokenType'];
        }

        return $model;
    }
}
