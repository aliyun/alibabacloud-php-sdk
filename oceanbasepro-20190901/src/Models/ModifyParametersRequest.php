<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyParametersRequest extends Model
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

    /**
     * @var string
     */
    public $parameters;
    protected $_name = [
        'dimension'      => 'Dimension',
        'dimensionValue' => 'DimensionValue',
        'instanceId'     => 'InstanceId',
        'parameters'     => 'Parameters',
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParametersRequest
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
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
