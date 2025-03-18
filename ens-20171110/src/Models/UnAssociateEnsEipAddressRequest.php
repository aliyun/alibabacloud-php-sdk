<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnAssociateEnsEipAddressRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * This parameter is required.
     *
     * @example eip-5sqa431nx3vee8heqxfxp****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'force' => 'Force',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnAssociateEnsEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
