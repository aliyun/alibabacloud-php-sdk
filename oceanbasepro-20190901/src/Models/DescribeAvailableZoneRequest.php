<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeAvailableZoneRequest extends Model
{
    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $obVersion;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'cpuArch' => 'CpuArch',
        'deployType' => 'DeployType',
        'instanceType' => 'InstanceType',
        'obVersion' => 'ObVersion',
        'series' => 'Series',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
