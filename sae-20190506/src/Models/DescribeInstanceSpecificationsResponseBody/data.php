<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeInstanceSpecificationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The CPU specification of the instance type. Unit: millicore.
     *
     * @example 2000
     *
     * @var int
     */
    public $cpu;

    /**
     * @description Indicates whether the instance type is available. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The ID of the instance type.
     *
     * @example 4
     *
     * @var int
     */
    public $id;

    /**
     * @description The memory size of the instance type. Unit: MB.
     *
     * @example 4096
     *
     * @var int
     */
    public $memory;

    /**
     * @description The name of the instance type.
     *
     * @var string
     */
    public $specInfo;

    /**
     * @description The version number of the instance type.
     *
     * @example 0
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'cpu'      => 'Cpu',
        'enable'   => 'Enable',
        'id'       => 'Id',
        'memory'   => 'Memory',
        'specInfo' => 'SpecInfo',
        'version'  => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->specInfo) {
            $res['SpecInfo'] = $this->specInfo;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['SpecInfo'])) {
            $model->specInfo = $map['SpecInfo'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
