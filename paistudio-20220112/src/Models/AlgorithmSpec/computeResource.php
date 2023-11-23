<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\computeResource\policy;
use AlibabaCloud\Tea\Model;

class computeResource extends Model
{
    /**
     * @var policy
     */
    public $policy;
    protected $_name = [
        'policy' => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        return $model;
    }
}
