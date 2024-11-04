<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\cpuOptions;

use AlibabaCloud\Tea\Model;

class supportedTopologyTypes extends Model
{
    /**
     * @var string[]
     */
    public $supportedTopologyType;
    protected $_name = [
        'supportedTopologyType' => 'SupportedTopologyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedTopologyType) {
            $res['SupportedTopologyType'] = $this->supportedTopologyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedTopologyTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedTopologyType'])) {
            if (!empty($map['SupportedTopologyType'])) {
                $model->supportedTopologyType = $map['SupportedTopologyType'];
            }
        }

        return $model;
    }
}
