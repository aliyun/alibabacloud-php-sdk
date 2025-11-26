<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class UnAssociateEnsEipAddressRequest extends Model
{
    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
