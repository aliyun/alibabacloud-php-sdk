<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeParametersRequest extends Model
{
    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $dimensionValue;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'dimension'      => 'Dimension',
        'dimensionValue' => 'DimensionValue',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
