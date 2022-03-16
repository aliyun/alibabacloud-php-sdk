<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class rateLimit extends Model
{
    /**
     * @var bool
     */
    public $enableGlobalRateLimit;
    protected $_name = [
        'enableGlobalRateLimit' => 'EnableGlobalRateLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableGlobalRateLimit) {
            $res['EnableGlobalRateLimit'] = $this->enableGlobalRateLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rateLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableGlobalRateLimit'])) {
            $model->enableGlobalRateLimit = $map['EnableGlobalRateLimit'];
        }

        return $model;
    }
}
