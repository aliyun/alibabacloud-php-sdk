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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAbacPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policyList extends Model
{
    /**
     * @example {
     * "Statement": [
     * {
     * "Action": "*",
     * "Effect": "Allow",
     * "Resource": "*",
     * "Condition": {
     * "StringEqualsIgnoreCase": {
     * "dms:DbType": [
     * "redis"
     * ]
     * }
     * }
     * }
     * ],
     * "Version": "1"
     * }
     *
     * @var string
     */
    public $abacPolicyContent;

    /**
     * @example test
     *
     * @var string
     */
    public $abacPolicyDesc;

    /**
     * @example 12****
     *
     * @var int
     */
    public $abacPolicyId;

    /**
     * @example policy_test
     *
     * @var string
     */
    public $abacPolicyName;

    /**
     * @example USER_DEFINE
     *
     * @var string
     */
    public $abacPolicySource;

    /**
     * @example 51****
     *
     * @var int
     */
    public $creatorId;
    protected $_name = [
        'abacPolicyContent' => 'AbacPolicyContent',
        'abacPolicyDesc' => 'AbacPolicyDesc',
        'abacPolicyId' => 'AbacPolicyId',
        'abacPolicyName' => 'AbacPolicyName',
        'abacPolicySource' => 'AbacPolicySource',
        'creatorId' => 'CreatorId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abacPolicyContent) {
            $res['AbacPolicyContent'] = $this->abacPolicyContent;
        }
        if (null !== $this->abacPolicyDesc) {
            $res['AbacPolicyDesc'] = $this->abacPolicyDesc;
        }
        if (null !== $this->abacPolicyId) {
            $res['AbacPolicyId'] = $this->abacPolicyId;
        }
        if (null !== $this->abacPolicyName) {
            $res['AbacPolicyName'] = $this->abacPolicyName;
        }
        if (null !== $this->abacPolicySource) {
            $res['AbacPolicySource'] = $this->abacPolicySource;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbacPolicyContent'])) {
            $model->abacPolicyContent = $map['AbacPolicyContent'];
        }
        if (isset($map['AbacPolicyDesc'])) {
            $model->abacPolicyDesc = $map['AbacPolicyDesc'];
        }
        if (isset($map['AbacPolicyId'])) {
            $model->abacPolicyId = $map['AbacPolicyId'];
        }
        if (isset($map['AbacPolicyName'])) {
            $model->abacPolicyName = $map['AbacPolicyName'];
        }
        if (isset($map['AbacPolicySource'])) {
            $model->abacPolicySource = $map['AbacPolicySource'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        return $model;
    }
}
