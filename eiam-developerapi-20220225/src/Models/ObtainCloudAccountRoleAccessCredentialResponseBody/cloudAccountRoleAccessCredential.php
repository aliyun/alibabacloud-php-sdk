<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential\alibabaCloudStsToken;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential\awsStsToken;

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

    /**
     * @var awsStsToken
     */
    public $awsStsToken;
    protected $_name = [
        'accessCredentialExpiresAt' => 'accessCredentialExpiresAt',
        'alibabaCloudStsToken' => 'alibabaCloudStsToken',
        'awsStsToken' => 'awsStsToken',
    ];

    public function validate()
    {
        if (null !== $this->alibabaCloudStsToken) {
            $this->alibabaCloudStsToken->validate();
        }
        if (null !== $this->awsStsToken) {
            $this->awsStsToken->validate();
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

        if (null !== $this->awsStsToken) {
            $res['awsStsToken'] = null !== $this->awsStsToken ? $this->awsStsToken->toArray($noStream) : $this->awsStsToken;
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

        if (isset($map['awsStsToken'])) {
            $model->awsStsToken = awsStsToken::fromMap($map['awsStsToken']);
        }

        return $model;
    }
}
