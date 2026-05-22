<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateLoadBalancerRequest;

use AlibabaCloud\Dara\Model;

class adaptiveRouting extends Model
{
    /**
     * @var bool
     */
    public $failoverAcrossPools;

    /**
     * @var bool
     */
    public $originLevelRetry;
    protected $_name = [
        'failoverAcrossPools' => 'FailoverAcrossPools',
        'originLevelRetry' => 'OriginLevelRetry',
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

        if (null !== $this->originLevelRetry) {
            $res['OriginLevelRetry'] = $this->originLevelRetry;
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

        if (isset($map['OriginLevelRetry'])) {
            $model->originLevelRetry = $map['OriginLevelRetry'];
        }

        return $model;
    }
}
