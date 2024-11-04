<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\cpuOptions\supportedTopologyTypes;
use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @var supportedTopologyTypes
     */
    public $supportedTopologyTypes;
    protected $_name = [
        'supportedTopologyTypes' => 'SupportedTopologyTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedTopologyTypes) {
            $res['SupportedTopologyTypes'] = null !== $this->supportedTopologyTypes ? $this->supportedTopologyTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedTopologyTypes'])) {
            $model->supportedTopologyTypes = supportedTopologyTypes::fromMap($map['SupportedTopologyTypes']);
        }

        return $model;
    }
}
