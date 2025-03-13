<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetProxyAccessResponseBody;

use AlibabaCloud\Tea\Model;

class proxyAccess extends Model
{
    /**
     * @description The username of the database account that is authorized to enable the secure access proxy feature for an instance.
     *
     * @example hObpgEXoca42q***
     *
     * @var string
     */
    public $accessId;

    /**
     * @description The time when the user is authorized to enable the secure access proxy feature for an instance.
     *
     * @example 1643034647
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The username of the independent database account.
     *
     * @example ***
     *
     * @var string
     */
    public $indepAccount;

    /**
     * @description The ID of the instance for which the secure access proxy feature is enabled.
     *
     * @example 1922545
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The method that is used to authorize the user to enable the secure access proxy feature for an instance. Valid values:
     *
     *   **Authorization by the Alibaba Cloud Account ()**: The information in the parentheses () indicates the ID of the Alibaba Cloud account.
     *   **Authorization by submitting the ticket ()**:The information in the parentheses () indicates the number of the ticket that the user submits to apply for permissions.
     *
     * @example Authorization by the Alibaba Cloud account (29490401597700\\*\\*\\*\\*)
     *
     * @var string
     */
    public $originInfo;

    /**
     * @description The ID that DMS generates after the user is authorized to enable the secure access proxy feature for an instance. The ID is unique in DMS. You can call the [ListProxyAccesses](https://help.aliyun.com/document_detail/295386.html) operation to query the ID.
     *
     * @example 2002
     *
     * @var int
     */
    public $proxyAccessId;

    /**
     * @description The ID of the secure access proxy.
     *
     * >  You can call the [ListProxies](https://help.aliyun.com/document_detail/295371.html) operation to query the ID of the secure access proxy.
     *
     * @example 1905
     *
     * @var int
     */
    public $proxyId;

    /**
     * @description The ID of the user.
     *
     * @example 12***
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
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 25936669186260****
     *
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

    public function validate(): void {}

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
