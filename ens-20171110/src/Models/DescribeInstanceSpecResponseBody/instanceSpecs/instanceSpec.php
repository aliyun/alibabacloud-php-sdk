<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponseBody\instanceSpecs;

use AlibabaCloud\Tea\Model;

class instanceSpec extends Model
{
    /**
     * @description The number of CPU cores.
     *
     * @example 1
     *
     * @var string
     */
    public $core;

    /**
     * @description The display name of the instance type.
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The type of the instance.
     *
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The memory size. Unit: MB.
     *
     * @example 2048
     *
     * @var string
     */
    public $memory;
    protected $_name = [
        'core'         => 'Core',
        'displayName'  => 'DisplayName',
        'instanceType' => 'InstanceType',
        'memory'       => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
