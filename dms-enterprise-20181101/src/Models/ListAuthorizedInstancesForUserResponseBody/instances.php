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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedInstancesForUserResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedInstancesForUserResponseBody\instances\permissionDetail;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @example rm-2zex9lrc0gz0****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example DMS_TEST
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @example 21****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var permissionDetail
     */
    public $permissionDetail;

    /**
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @example 51****
     *
     * @var string
     */
    public $userId;

    /**
     * @example user_test
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'host' => 'Host',
        'instanceAlias' => 'InstanceAlias',
        'instanceId' => 'InstanceId',
        'permissionDetail' => 'PermissionDetail',
        'port' => 'Port',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permissionDetail) {
            $res['PermissionDetail'] = null !== $this->permissionDetail ? $this->permissionDetail->toMap() : null;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermissionDetail'])) {
            $model->permissionDetail = permissionDetail::fromMap($map['PermissionDetail']);
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
