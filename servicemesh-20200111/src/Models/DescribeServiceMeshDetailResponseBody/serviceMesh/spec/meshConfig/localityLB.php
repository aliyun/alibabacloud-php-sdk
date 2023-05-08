<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class localityLB extends Model
{
    /**
     * @description The configurations of cross-region traffic distribution.
     *
     * >  Only one of `Failover` and Distribute parameters can be set. If you set the `Distribute` parameter, you cannot set the Failover parameter.
     * @example [{"from":"cn-shanghai","to":{"cn-hangzhou/*":50,"cn-shanghai/*":25,"cn-zhangjiakou/*":25}},{"from":"cn-hangzhou","to":{"cn-hangzhou/*":50,"cn-shanghai/*":25,"cn-zhangjiakou/*":25}}]
     *
     * @var mixed[]
     */
    public $distribute;

    /**
     * @description Indicates whether cross-region load balancing is enabled. Valid values:
     *
     *   `true`: Cross-region load balancing is enabled.
     *   `false`: Cross-region load balancing is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The configurations of cross-region failover.
     *
     * >  Only one of Failover and `Distribute` parameters can be set. If you set the `Failover` parameter, you cannot set the `Distribute` parameter.
     * @example {"failover":[{"from":"cn-hangzhou","to":"cn-shanghai"}]}
     *
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
