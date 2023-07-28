<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetParameterRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to GetParameter.
     *
     * @example MyParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the common parameter was updated.
     *
     * @example 1
     *
     * @var int
     */
    public $parameterVersion;

    /**
     * @description The name of the common parameter.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The user who created the common parameter.
     *
     * @example rg-acfmxsn4m*****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'name'             => 'Name',
        'parameterVersion' => 'ParameterVersion',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterVersion) {
            $res['ParameterVersion'] = $this->parameterVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParameterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterVersion'])) {
            $model->parameterVersion = $map['ParameterVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
