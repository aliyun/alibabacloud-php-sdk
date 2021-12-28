<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class localityLB extends Model
{
    /**
     * @var mixed[]
     */
    public $distribute;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var mixed[]
     */
    public $failover;
    protected $_name = [
        'distribute' => 'Distribute',
        'enabled'    => 'Enabled',
        'failover'   => 'Failover',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distribute) {
            $res['Distribute'] = $this->distribute;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->failover) {
            $res['Failover'] = $this->failover;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localityLB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Distribute'])) {
            $model->distribute = $map['Distribute'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Failover'])) {
            $model->failover = $map['Failover'];
        }

        return $model;
    }
}
