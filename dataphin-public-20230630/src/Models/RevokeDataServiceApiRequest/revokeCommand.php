<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeDataServiceApiRequest;

use AlibabaCloud\Dara\Model;

class revokeCommand extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $granteeType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'apiId' => 'ApiId',
        'appId' => 'AppId',
        'authType' => 'AuthType',
        'env' => 'Env',
        'granteeType' => 'GranteeType',
        'reason' => 'Reason',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->granteeType) {
            $res['GranteeType'] = $this->granteeType;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['GranteeType'])) {
            $model->granteeType = $map['GranteeType'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
