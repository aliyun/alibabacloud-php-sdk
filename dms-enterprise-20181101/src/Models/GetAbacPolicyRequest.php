<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetAbacPolicyRequest extends Model
{
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
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'abacPolicyId' => 'AbacPolicyId',
        'abacPolicyName' => 'AbacPolicyName',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abacPolicyId) {
            $res['AbacPolicyId'] = $this->abacPolicyId;
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
     * @return GetAbacPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbacPolicyId'])) {
            $model->abacPolicyId = $map['AbacPolicyId'];
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
