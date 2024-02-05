<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest;

use AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest\deploymentPolicy\network;
use AlibabaCloud\Tea\Model;

class deploymentPolicy extends Model
{
    /**
     * @example Dedicated
     *
     * @var string
     */
    public $allocationSpec;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'allocationSpec' => 'AllocationSpec',
        'network'        => 'Network',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationSpec) {
            $res['AllocationSpec'] = $this->allocationSpec;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationSpec'])) {
            $model->allocationSpec = $map['AllocationSpec'];
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
