<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

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
        'dimension' => 'Dimension',
        'dimensionValue' => 'DimensionValue',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
