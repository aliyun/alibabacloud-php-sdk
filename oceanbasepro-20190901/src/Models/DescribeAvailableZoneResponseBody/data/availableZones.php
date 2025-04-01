<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications;

class availableZones extends Model
{
    /**
     * @var string
     */
    public $channel;

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
    public $region;

    /**
     * @var string
     */
    public $series;

    /**
     * @var supportSpecifications[]
     */
    public $supportSpecifications;

    /**
     * @var string
     */
    public $zones;
    protected $_name = [
        'channel' => 'Channel',
        'cpuArch' => 'CpuArch',
        'deployType' => 'DeployType',
        'instanceType' => 'InstanceType',
        'region' => 'Region',
        'series' => 'Series',
        'supportSpecifications' => 'SupportSpecifications',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->supportSpecifications)) {
            Model::validateArray($this->supportSpecifications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        if (null !== $this->supportSpecifications) {
            if (\is_array($this->supportSpecifications)) {
                $res['SupportSpecifications'] = [];
                $n1 = 0;
                foreach ($this->supportSpecifications as $item1) {
                    $res['SupportSpecifications'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
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
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        if (isset($map['SupportSpecifications'])) {
            if (!empty($map['SupportSpecifications'])) {
                $model->supportSpecifications = [];
                $n1 = 0;
                foreach ($map['SupportSpecifications'] as $item1) {
                    $model->supportSpecifications[$n1++] = supportSpecifications::fromMap($item1);
                }
            }
        }

        if (isset($map['Zones'])) {
            $model->zones = $map['Zones'];
        }

        return $model;
    }
}
