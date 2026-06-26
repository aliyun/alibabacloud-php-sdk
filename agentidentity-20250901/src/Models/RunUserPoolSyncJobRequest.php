<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class RunUserPoolSyncJobRequest extends Model
{
    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string
     */
    public $maxSyncUsers;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'identityProviderType' => 'IdentityProviderType',
        'maxSyncUsers' => 'MaxSyncUsers',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->maxSyncUsers) {
            $res['MaxSyncUsers'] = $this->maxSyncUsers;
        }

        if (null !== $this->userPoolName) {
            $res['UserPoolName'] = $this->userPoolName;
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
        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['MaxSyncUsers'])) {
            $model->maxSyncUsers = $map['MaxSyncUsers'];
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
