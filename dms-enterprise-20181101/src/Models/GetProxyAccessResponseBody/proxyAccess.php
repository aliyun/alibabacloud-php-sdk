<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessResponseBody;

use AlibabaCloud\Dara\Model;

class proxyAccess extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $indepAccount;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $originInfo;

    /**
     * @var int
     */
    public $proxyAccessId;

    /**
     * @var int
     */
    public $proxyId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userUid;
    protected $_name = [
        'accessId' => 'AccessId',
        'gmtCreate' => 'GmtCreate',
        'indepAccount' => 'IndepAccount',
        'instanceId' => 'InstanceId',
        'originInfo' => 'OriginInfo',
        'proxyAccessId' => 'ProxyAccessId',
        'proxyId' => 'ProxyId',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'userUid' => 'UserUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->indepAccount) {
            $res['IndepAccount'] = $this->indepAccount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->originInfo) {
            $res['OriginInfo'] = $this->originInfo;
        }

        if (null !== $this->proxyAccessId) {
            $res['ProxyAccessId'] = $this->proxyAccessId;
        }

        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['IndepAccount'])) {
            $model->indepAccount = $map['IndepAccount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OriginInfo'])) {
            $model->originInfo = $map['OriginInfo'];
        }

        if (isset($map['ProxyAccessId'])) {
            $model->proxyAccessId = $map['ProxyAccessId'];
        }

        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }

        return $model;
    }
}
