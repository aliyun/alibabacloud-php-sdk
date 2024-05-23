<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeParametersRequest extends Model
{
    /**
     * @description It is an online CLI tool that allows you to quickly retrieve and debug APIs. It can dynamically generate executable SDK code samples.
     *
     * This parameter is required.
     * @example TENANT
     *
     * @var string
     */
    public $dimension;

    /**
     * @description Alibaba Cloud CLI
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $dimensionValue;

    /**
     * @description 498529
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
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
