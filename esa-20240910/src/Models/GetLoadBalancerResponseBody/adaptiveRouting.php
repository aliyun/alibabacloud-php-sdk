<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody;

use AlibabaCloud\Tea\Model;

class adaptiveRouting extends Model
{
    /**
     * @description Whether to fail over across pools.
     *
     * - true: Yes.
     * - false: No.
     *
     * @example true
     *
     * @var bool
     */
    public $failoverAcrossPools;
    protected $_name = [
        'failoverAcrossPools' => 'FailoverAcrossPools',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failoverAcrossPools) {
            $res['FailoverAcrossPools'] = $this->failoverAcrossPools;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adaptiveRouting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailoverAcrossPools'])) {
            $model->failoverAcrossPools = $map['FailoverAcrossPools'];
        }

        return $model;
    }
}
