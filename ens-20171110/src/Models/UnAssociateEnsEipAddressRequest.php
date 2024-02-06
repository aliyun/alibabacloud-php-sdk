<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnAssociateEnsEipAddressRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-5sqa431nx3vee8heqxfxp4e4r
     *
     * @var string
     */
    public $allocationId;
    protected $_name = [
        'allocationId' => 'AllocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
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

        return $model;
    }
}
