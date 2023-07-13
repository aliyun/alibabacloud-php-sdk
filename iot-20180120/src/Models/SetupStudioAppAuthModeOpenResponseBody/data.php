<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\SetupStudioAppAuthModeOpenResponseBody\data\tokenInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $authMode;

    /**
     * @var tokenInfo
     */
    public $tokenInfo;
    protected $_name = [
        'authMode'  => 'AuthMode',
        'tokenInfo' => 'TokenInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authMode) {
            $res['AuthMode'] = $this->authMode;
        }
        if (null !== $this->tokenInfo) {
            $res['TokenInfo'] = null !== $this->tokenInfo ? $this->tokenInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
