<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CheckBackupEncryptionAuthorizedResponseBody extends Model
{
    /**
     * @var string
     */
    public $authorizationState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roleARN;
    protected $_name = [
        'authorizationState' => 'AuthorizationState',
        'requestId' => 'RequestId',
        'roleARN' => 'RoleARN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationState) {
            $res['AuthorizationState'] = $this->authorizationState;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
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
        if (isset($map['AuthorizationState'])) {
            $model->authorizationState = $map['AuthorizationState'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }

        return $model;
    }
}
