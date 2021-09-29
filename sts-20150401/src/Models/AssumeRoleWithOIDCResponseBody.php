<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody\assumedRoleUser;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody\credentials;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody\OIDCTokenInfo;
use AlibabaCloud\Tea\Model;

class AssumeRoleWithOIDCResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var OIDCTokenInfo
     */
    public $OIDCTokenInfo;

    /**
     * @var assumedRoleUser
     */
    public $assumedRoleUser;

    /**
     * @var credentials
     */
    public $credentials;
    protected $_name = [
        'requestId'       => 'RequestId',
        'OIDCTokenInfo'   => 'OIDCTokenInfo',
        'assumedRoleUser' => 'AssumedRoleUser',
        'credentials'     => 'Credentials',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->OIDCTokenInfo) {
            $res['OIDCTokenInfo'] = null !== $this->OIDCTokenInfo ? $this->OIDCTokenInfo->toMap() : null;
        }
        if (null !== $this->assumedRoleUser) {
            $res['AssumedRoleUser'] = null !== $this->assumedRoleUser ? $this->assumedRoleUser->toMap() : null;
        }
        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssumeRoleWithOIDCResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OIDCTokenInfo'])) {
            $model->OIDCTokenInfo = OIDCTokenInfo::fromMap($map['OIDCTokenInfo']);
        }
        if (isset($map['AssumedRoleUser'])) {
            $model->assumedRoleUser = assumedRoleUser::fromMap($map['AssumedRoleUser']);
        }
        if (isset($map['Credentials'])) {
            $model->credentials = credentials::fromMap($map['Credentials']);
        }

        return $model;
    }
}
