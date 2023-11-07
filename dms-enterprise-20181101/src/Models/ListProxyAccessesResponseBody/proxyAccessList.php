<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxyAccessesResponseBody;

use AlibabaCloud\Tea\Model;

class proxyAccessList extends Model
{
    /**
     * @description The username of the database account that is authorized to access the database instance by using the secure access proxy feature.
     *
     * @example MXPL8HalI22m****
     *
     * @var string
     */
    public $accessId;

    /**
     * @description The time when the user is authorized to access the database instance by using the secure access proxy feature.
     *
     * @example 2021-03-31 10:34:18
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The username of the independent database account.
     *
     * @example ****
     *
     * @var string
     */
    public $indepAccount;

    /**
     * @description The ID of the database instance.
     *
     * @example 164****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The method that is used to authorize the user to access the database instance by using the secure access proxy feature. Valid values:
     *
     * - **Authorization by the Alibaba Cloud Account ()**: The information in the parentheses () indicates the user ID (UID) of the Alibaba Cloud account.
     * - **Authorization by submitting the ticket ()**:The information in the parentheses () indicates the number of the ticket that the user submits to apply for permissions.
     * @example Authorization by the Alibaba Cloud Account(29490401597700****)
     *
     * @var string
     */
    public $originInfo;

    /**
     * @description The ID that DMS generates after the user is authorized to access the database instance by using the secure access proxy feature. The ID is unique in DMS.
     *
     * @example ****
     *
     * @var int
     */
    public $proxyAccessId;

    /**
     * @description The ID of the secure access proxy.
     *
     * @example 47
     *
     * @var int
     */
    public $proxyId;

    /**
     * @description The ID of the user.
     *
     * @example 26****
     *
     * @var int
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example user
     *
     * @var string
     */
    public $userName;

    /**
     * @description The UID of the Alibaba Cloud account.
     *
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
     * @return proxyAccessList
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
