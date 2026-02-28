<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenResponseBody\data\tokenInfo;

class data extends Model
{
    /**
     * @var int
     */
    public $authMode;

    /**
     * @var tokenInfo
     */
    public $tokenInfo;
    protected $_name = [
        'authMode' => 'AuthMode',
        'tokenInfo' => 'TokenInfo',
    ];

    public function validate()
    {
        if (null !== $this->tokenInfo) {
            $this->tokenInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMode) {
            $res['AuthMode'] = $this->authMode;
        }

        if (null !== $this->tokenInfo) {
            $res['TokenInfo'] = null !== $this->tokenInfo ? $this->tokenInfo->toArray($noStream) : $this->tokenInfo;
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
        if (isset($map['AuthMode'])) {
            $model->authMode = $map['AuthMode'];
        }

        if (isset($map['TokenInfo'])) {
            $model->tokenInfo = tokenInfo::fromMap($map['TokenInfo']);
        }

        return $model;
    }
}
