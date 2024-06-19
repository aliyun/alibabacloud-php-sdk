<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceRequest;

use AlibabaCloud\Tea\Model;

class destinationResource extends Model
{
    /**
     * @description The type of the resource. Valid values:
     *
     *   InstanceTypeFamily: queries instance families. If you use this parameter value, you must also specify the Value parameter.
     *   InstanceType: queries instance types. If you use this parameter value, you must also specify the Value, Cores, and Memory parameters.
     *
     * This parameter is required.
     * @example InstanceTypeFamily
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of vCPUs. This parameter is available only when the Category parameter is set to InstanceType.
     *
     * @example 2
     *
     * @var float
     */
    public $cores;

    /**
     * @description The size of the memory. Unit: GiB. This parameter is available only when the Category parameter is set to InstanceType.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @description Instance families or instance types.
     *
     *   If you set Category to InstanceTypeFamily, you must set this parameter to instance families such as ecs.c5.
     *   If you set Category to InstanceType, you must set this parameter to instance types such as ecs.c5.large.
     *
     * @example ecs.c6
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'category' => 'Category',
        'cores'    => 'Cores',
        'memory'   => 'Memory',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
