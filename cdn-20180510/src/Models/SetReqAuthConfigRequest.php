<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetReqAuthConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $key1;

    /**
     * @var string
     */
    public $key2;

    /**
     * @var string
     */
    public $timeOut;

    /**
     * @var string
     */
    public $authRemoteDesc;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'securityToken'  => 'SecurityToken',
        'domainName'     => 'DomainName',
        'authType'       => 'AuthType',
        'key1'           => 'Key1',
        'key2'           => 'Key2',
        'timeOut'        => 'TimeOut',
        'authRemoteDesc' => 'AuthRemoteDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->key1) {
            $res['Key1'] = $this->key1;
        }
        if (null !== $this->key2) {
            $res['Key2'] = $this->key2;
        }
        if (null !== $this->timeOut) {
            $res['TimeOut'] = $this->timeOut;
        }
        if (null !== $this->authRemoteDesc) {
            $res['AuthRemoteDesc'] = $this->authRemoteDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetReqAuthConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['Key1'])) {
            $model->key1 = $map['Key1'];
        }
        if (isset($map['Key2'])) {
            $model->key2 = $map['Key2'];
        }
        if (isset($map['TimeOut'])) {
            $model->timeOut = $map['TimeOut'];
        }
        if (isset($map['AuthRemoteDesc'])) {
            $model->authRemoteDesc = $map['AuthRemoteDesc'];
        }

        return $model;
    }
}
