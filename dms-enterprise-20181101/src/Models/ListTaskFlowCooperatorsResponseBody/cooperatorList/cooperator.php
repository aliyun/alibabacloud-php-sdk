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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody\cooperatorList;

use AlibabaCloud\Tea\Model;

class cooperator extends Model
{
    /**
     * @description The email address of the user.
     *
     * @example test@XX.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The username.
     *
     * @example name
     *
     * @var string
     */
    public $loginName;

    /**
     * @description The alias of the user.
     *
     * @example name
     *
     * @var string
     */
    public $nickName;

    /**
     * @description userId.
     *
     * @example 123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'email' => 'Email',
        'loginName' => 'LoginName',
        'nickName' => 'NickName',
        'userId' => 'UserId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cooperator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
