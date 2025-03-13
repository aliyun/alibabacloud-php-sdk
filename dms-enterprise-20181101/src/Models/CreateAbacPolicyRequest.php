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

class CreateAbacPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example policy_test
     *
     * @var string
     */
    public $abacPolicyName;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'abacPolicyContent' => 'AbacPolicyContent',
        'abacPolicyDesc' => 'AbacPolicyDesc',
        'abacPolicyName' => 'AbacPolicyName',
        'tid' => 'Tid',
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
        if (null !== $this->abacPolicyName) {
            $res['AbacPolicyName'] = $this->abacPolicyName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAbacPolicyRequest
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
        if (isset($map['AbacPolicyName'])) {
            $model->abacPolicyName = $map['AbacPolicyName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
