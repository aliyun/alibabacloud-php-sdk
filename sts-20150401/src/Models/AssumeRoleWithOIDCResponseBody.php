<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody\assumedRoleUser;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody\credentials;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody\OIDCTokenInfo;

class AssumeRoleWithOIDCResponseBody extends Model
{
    /**
     * @var assumedRoleUser
     */
    public $assumedRoleUser;

    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @var OIDCTokenInfo
     */
    public $OIDCTokenInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assumedRoleUser' => 'AssumedRoleUser',
        'credentials' => 'Credentials',
        'OIDCTokenInfo' => 'OIDCTokenInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->assumedRoleUser) {
            $this->assumedRoleUser->validate();
        }
        if (null !== $this->credentials) {
            $this->credentials->validate();
        }
        if (null !== $this->OIDCTokenInfo) {
            $this->OIDCTokenInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumedRoleUser) {
            $res['AssumedRoleUser'] = null !== $this->assumedRoleUser ? $this->assumedRoleUser->toArray($noStream) : $this->assumedRoleUser;
        }

        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toArray($noStream) : $this->credentials;
        }

        if (null !== $this->OIDCTokenInfo) {
            $res['OIDCTokenInfo'] = null !== $this->OIDCTokenInfo ? $this->OIDCTokenInfo->toArray($noStream) : $this->OIDCTokenInfo;
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
        if (isset($map['AssumedRoleUser'])) {
            $model->assumedRoleUser = assumedRoleUser::fromMap($map['AssumedRoleUser']);
        }

        if (isset($map['Credentials'])) {
            $model->credentials = credentials::fromMap($map['Credentials']);
        }

        if (isset($map['OIDCTokenInfo'])) {
            $model->OIDCTokenInfo = OIDCTokenInfo::fromMap($map['OIDCTokenInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
