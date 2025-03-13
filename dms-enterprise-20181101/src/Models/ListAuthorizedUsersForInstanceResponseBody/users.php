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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedUsersForInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example 164882191****
     *
     * @var string
     */
    public $uid;

    /**
     * @example 51***
     *
     * @var string
     */
    public $userId;

    /**
     * @example user_test
     *
     * @var string
     */
    public $userNickName;

    /**
     * @example user01
     *
     * @var string
     */
    public $userRealName;
    protected $_name = [
        'uid' => 'Uid',
        'userId' => 'UserId',
        'userNickName' => 'UserNickName',
        'userRealName' => 'UserRealName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
        }
        if (null !== $this->userRealName) {
            $res['UserRealName'] = $this->userRealName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }
        if (isset($map['UserRealName'])) {
            $model->userRealName = $map['UserRealName'];
        }

        return $model;
    }
}
