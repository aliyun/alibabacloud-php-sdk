<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\InitAiAppScanResponseBody\authInfo;

class InitAiAppScanResponseBody extends Model
{
    /**
     * @var authInfo
     */
    public $authInfo;

    /**
     * @var AuthInfoConfigValue[]
     */
    public $authInfoConfig;

    /**
     * @var string
     */
    public $authStatus;

    /**
     * @var string
     */
    public $openStatus;

    /**
     * @var string
     */
    public $readyStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authInfo' => 'AuthInfo',
        'authInfoConfig' => 'AuthInfoConfig',
        'authStatus' => 'AuthStatus',
        'openStatus' => 'OpenStatus',
        'readyStatus' => 'ReadyStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->authInfo) {
            $this->authInfo->validate();
        }
        if (\is_array($this->authInfoConfig)) {
            Model::validateArray($this->authInfoConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authInfo) {
            $res['AuthInfo'] = null !== $this->authInfo ? $this->authInfo->toArray($noStream) : $this->authInfo;
        }

        if (null !== $this->authInfoConfig) {
            if (\is_array($this->authInfoConfig)) {
                $res['AuthInfoConfig'] = [];
                foreach ($this->authInfoConfig as $key1 => $value1) {
                    $res['AuthInfoConfig'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
        }

        if (null !== $this->readyStatus) {
            $res['ReadyStatus'] = $this->readyStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AuthInfo'])) {
            $model->authInfo = authInfo::fromMap($map['AuthInfo']);
        }

        if (isset($map['AuthInfoConfig'])) {
            if (!empty($map['AuthInfoConfig'])) {
                $model->authInfoConfig = [];
                foreach ($map['AuthInfoConfig'] as $key1 => $value1) {
                    $model->authInfoConfig[$key1] = AuthInfoConfigValue::fromMap($value1);
                }
            }
        }

        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }

        if (isset($map['ReadyStatus'])) {
            $model->readyStatus = $map['ReadyStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
