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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission\permDetails;
use AlibabaCloud\Tea\Model;

class userPermission extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example 174****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The details of permissions.
     *
     * @var permDetails
     */
    public $permDetails;

    /**
     * @description The ID of the user.
     *
     * @example 51****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example test_nick_name
     *
     * @var string
     */
    public $userNickName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'permDetails' => 'PermDetails',
        'userId' => 'UserId',
        'userNickName' => 'UserNickName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permDetails) {
            $res['PermDetails'] = null !== $this->permDetails ? $this->permDetails->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermDetails'])) {
            $model->permDetails = permDetails::fromMap($map['PermDetails']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }

        return $model;
    }
}
