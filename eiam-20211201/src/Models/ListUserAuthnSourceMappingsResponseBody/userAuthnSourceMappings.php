<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUserAuthnSourceMappingsResponseBody;

use AlibabaCloud\Dara\Model;

class userAuthnSourceMappings extends Model
{
    /**
     * @var string
     */
    public $authnSourceType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $externalData;

    /**
     * @var string
     */
    public $identityProviderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userExternalId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'authnSourceType' => 'AuthnSourceType',
        'createTime' => 'CreateTime',
        'externalData' => 'ExternalData',
        'identityProviderId' => 'IdentityProviderId',
        'instanceId' => 'InstanceId',
        'updateTime' => 'UpdateTime',
        'userExternalId' => 'UserExternalId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authnSourceType) {
            $res['AuthnSourceType'] = $this->authnSourceType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->externalData) {
            $res['ExternalData'] = $this->externalData;
        }

        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userExternalId) {
            $res['UserExternalId'] = $this->userExternalId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AuthnSourceType'])) {
            $model->authnSourceType = $map['AuthnSourceType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExternalData'])) {
            $model->externalData = $map['ExternalData'];
        }

        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserExternalId'])) {
            $model->userExternalId = $map['UserExternalId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
