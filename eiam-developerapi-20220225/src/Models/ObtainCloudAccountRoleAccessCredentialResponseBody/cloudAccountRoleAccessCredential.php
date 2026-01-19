<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential\alibabaCloudStsToken;

class cloudAccountRoleAccessCredential extends Model
{
    /**
     * @var int
     */
    public $accessCredentialExpiresAt;

    /**
     * @var alibabaCloudStsToken
     */
    public $alibabaCloudStsToken;
    protected $_name = [
        'accessCredentialExpiresAt' => 'accessCredentialExpiresAt',
        'alibabaCloudStsToken' => 'alibabaCloudStsToken',
    ];

    public function validate()
    {
        if (null !== $this->alibabaCloudStsToken) {
            $this->alibabaCloudStsToken->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessCredentialExpiresAt) {
            $res['accessCredentialExpiresAt'] = $this->accessCredentialExpiresAt;
        }

        if (null !== $this->alibabaCloudStsToken) {
            $res['alibabaCloudStsToken'] = null !== $this->alibabaCloudStsToken ? $this->alibabaCloudStsToken->toArray($noStream) : $this->alibabaCloudStsToken;
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
        if (isset($map['accessCredentialExpiresAt'])) {
            $model->accessCredentialExpiresAt = $map['accessCredentialExpiresAt'];
        }

        if (isset($map['alibabaCloudStsToken'])) {
            $model->alibabaCloudStsToken = alibabaCloudStsToken::fromMap($map['alibabaCloudStsToken']);
        }

        return $model;
    }
}
