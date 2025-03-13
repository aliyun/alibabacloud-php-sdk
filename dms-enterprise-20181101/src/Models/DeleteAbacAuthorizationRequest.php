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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteAbacAuthorizationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123***
     *
     * @var int
     */
    public $authorizationId;

    /**
     * @description This parameter is required.
     *
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'authorizationId' => 'AuthorizationId',
        'identityType' => 'IdentityType',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['AuthorizationId'] = $this->authorizationId;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAbacAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationId'])) {
            $model->authorizationId = $map['AuthorizationId'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
