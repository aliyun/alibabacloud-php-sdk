<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableZoneRequest extends Model
{
    /**
     * @example x86
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description This parameter is required.
     *
     * @example cluster
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 3.2.4.4
     *
     * @var string
     */
    public $obVersion;

    /**
     * @example normal
     *
     * @var string
     */
    public $series;

    /**
     * @example oceanbase.cluster.cd8.xlarge
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'cpuArch'      => 'CpuArch',
        'deployType'   => 'DeployType',
        'instanceType' => 'InstanceType',
        'obVersion'    => 'ObVersion',
        'series'       => 'Series',
        'spec'         => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeAvailableZoneRequest
     */
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
