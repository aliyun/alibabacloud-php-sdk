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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAbacAuthorizationsResponseBody;

use AlibabaCloud\Tea\Model;

class authorizationList extends Model
{
    /**
     * @example 32****
     *
     * @var int
     */
    public $authorizationId;

    /**
     * @example 51****
     *
     * @var int
     */
    public $identityId;

    /**
     * @example test_user
     *
     * @var string
     */
    public $identityName;

    /**
     * @example USER
     *
     * @var string
     */
    public $identityType;

    /**
     * @example 12****
     *
     * @var int
     */
    public $policyId;

    /**
     * @example policy_test
     *
     * @var string
     */
    public $policyName;

    /**
     * @example USER_DEFINE
     *
     * @var string
     */
    public $policySource;
    protected $_name = [
        'authorizationId' => 'AuthorizationId',
        'identityId' => 'IdentityId',
        'identityName' => 'IdentityName',
        'identityType' => 'IdentityType',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'policySource' => 'PolicySource',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['AuthorizationId'] = $this->authorizationId;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policySource) {
            $res['PolicySource'] = $this->policySource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationId'])) {
            $model->authorizationId = $map['AuthorizationId'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicySource'])) {
            $model->policySource = $map['PolicySource'];
        }

        return $model;
    }
}
