<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Tea\Model;

class GetCallerIdentityResponseBody extends Model
{
    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'identityType' => 'IdentityType',
        'accountId'    => 'AccountId',
        'requestId'    => 'RequestId',
        'principalId'  => 'PrincipalId',
        'userId'       => 'UserId',
        'arn'          => 'Arn',
        'roleId'       => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCallerIdentityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
