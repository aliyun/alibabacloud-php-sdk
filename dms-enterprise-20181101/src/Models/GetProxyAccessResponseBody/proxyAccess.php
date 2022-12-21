<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessResponseBody;

use AlibabaCloud\Tea\Model;

class proxyAccess extends Model
{
    /**
     * @example hObpgEXoca42q***
     *
     * @var string
     */
    public $accessId;

    /**
     * @example 1643034647
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example ***
     *
     * @var string
     */
    public $indepAccount;

    /**
     * @example 1922545
     *
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $originInfo;

    /**
     * @example 2002
     *
     * @var int
     */
    public $proxyAccessId;

    /**
     * @example 1905
     *
     * @var int
     */
    public $proxyId;

    /**
     * @example 12***
     *
     * @var int
     */
    public $userId;

    /**
     * @example user
     *
     * @var string
     */
    public $userName;

    /**
     * @example 25936669186260****
     *
     * @var string
     */
    public $userUid;
    protected $_name = [
        'accessId'      => 'AccessId',
        'gmtCreate'     => 'GmtCreate',
        'indepAccount'  => 'IndepAccount',
        'instanceId'    => 'InstanceId',
        'originInfo'    => 'OriginInfo',
        'proxyAccessId' => 'ProxyAccessId',
        'proxyId'       => 'ProxyId',
        'userId'        => 'UserId',
        'userName'      => 'UserName',
        'userUid'       => 'UserUid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return proxyAccess
     */
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
