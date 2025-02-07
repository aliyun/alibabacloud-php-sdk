<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Dara\Model;

class adaptiveRouting extends Model
{
    /**
     * @var bool
     */
    public $failoverAcrossPools;
    protected $_name = [
        'failoverAcrossPools' => 'FailoverAcrossPools',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failoverAcrossPools) {
            $res['FailoverAcrossPools'] = $this->failoverAcrossPools;
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
        if (isset($map['FailoverAcrossPools'])) {
            $model->failoverAcrossPools = $map['FailoverAcrossPools'];
        }

        return $model;
    }
}
