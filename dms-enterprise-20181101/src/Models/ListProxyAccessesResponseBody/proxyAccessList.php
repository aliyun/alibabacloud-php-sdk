<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxyAccessesResponseBody;

use AlibabaCloud\Tea\Model;

class proxyAccessList extends Model
{
    /**
     * @var int
     */
    public $proxyAccessId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $originInfo;

    /**
     * @var string
     */
    public $indepAccount;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userUid;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $proxyId;

    /**
     * @var int
     */
    public $instanceId;
    protected $_name = [
        'proxyAccessId' => 'ProxyAccessId',
        'gmtCreate'     => 'GmtCreate',
        'accessId'      => 'AccessId',
        'originInfo'    => 'OriginInfo',
        'indepAccount'  => 'IndepAccount',
        'userId'        => 'UserId',
        'userUid'       => 'UserUid',
        'userName'      => 'UserName',
        'proxyId'       => 'ProxyId',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyAccessId) {
            $res['ProxyAccessId'] = $this->proxyAccessId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->originInfo) {
            $res['OriginInfo'] = $this->originInfo;
        }
        if (null !== $this->indepAccount) {
            $res['IndepAccount'] = $this->indepAccount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyAccessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyAccessId'])) {
            $model->proxyAccessId = $map['ProxyAccessId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['OriginInfo'])) {
            $model->originInfo = $map['OriginInfo'];
        }
        if (isset($map['IndepAccount'])) {
            $model->indepAccount = $map['IndepAccount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
