<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyParametersRequest extends Model
{
    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example TENANT
     *
     * @var string
     */
    public $dimension;

    /**
     * @description The cause of the modification failure.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $dimensionValue;

    /**
     * @description Alibaba Cloud CLI
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The resource ID of the parameter type.
     * This parameter is required.
     * @example [{"Name":"connect_timeout","Value":"20"}]
     *
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
