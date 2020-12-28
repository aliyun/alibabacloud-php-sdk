<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\ecsOrder\compute;
use AlibabaCloud\Tea\Model;

class ecsOrder extends Model
{
    /**
     * @var compute
     */
    public $compute;
    protected $_name = [
        'compute' => 'Compute',
    ];

    public function validate()
    {
        Model::validateRequired('compute', $this->compute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compute) {
            $res['Compute'] = null !== $this->compute ? $this->compute->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compute'])) {
            $model->compute = compute::fromMap($map['Compute']);
        }

        return $model;
    }
}
