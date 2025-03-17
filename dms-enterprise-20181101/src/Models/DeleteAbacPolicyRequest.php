<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteAbacPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12****
     *
     * @var int
     */
    public $abacPolicyId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'abacPolicyId' => 'AbacPolicyId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abacPolicyId) {
            $res['AbacPolicyId'] = $this->abacPolicyId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAbacPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbacPolicyId'])) {
            $model->abacPolicyId = $map['AbacPolicyId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
