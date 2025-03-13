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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedDatabasesForUserResponseBody\databases;

use AlibabaCloud\Tea\Model;

class permissionDetail extends Model
{
    /**
     * @example DATABASE
     *
     * @var string
     */
    public $dsType;

    /**
     * @example 2024-12-06 10:00:00
     *
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $message;

    /**
     * @example CORRECT
     *
     * @var string
     */
    public $permType;
    protected $_name = [
        'dsType' => 'DsType',
        'expireDate' => 'ExpireDate',
        'message' => 'Message',
        'permType' => 'PermType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }

        return $model;
    }
}
