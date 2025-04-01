<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeZonesRequest extends Model
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
    public $series;
    protected $_name = [
        'cpuArch' => 'CpuArch',
        'deployType' => 'DeployType',
        'series' => 'Series',
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

        if (null !== $this->series) {
            $res['Series'] = $this->series;
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

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        return $model;
    }
}
