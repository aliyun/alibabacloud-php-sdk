<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications;
use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $channel;

    /**
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @example cluster
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example normal
     *
     * @var string
     */
    public $series;

    /**
     * @var supportSpecifications[]
     */
    public $supportSpecifications;

    /**
     * @example cn-hangzhou-h,cn-hangzhou-i,cn-hangzhou-j
     *
     * @var string
     */
    public $zones;
    protected $_name = [
        'channel'               => 'Channel',
        'deployType'            => 'DeployType',
        'instanceType'          => 'InstanceType',
        'region'                => 'Region',
        'series'                => 'Series',
        'supportSpecifications' => 'SupportSpecifications',
        'zones'                 => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
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
            $res['SupportSpecifications'] = [];
            if (null !== $this->supportSpecifications && \is_array($this->supportSpecifications)) {
                $n = 0;
                foreach ($this->supportSpecifications as $item) {
                    $res['SupportSpecifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
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
                $n                            = 0;
                foreach ($map['SupportSpecifications'] as $item) {
                    $model->supportSpecifications[$n++] = null !== $item ? supportSpecifications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Zones'])) {
            $model->zones = $map['Zones'];
        }

        return $model;
    }
}
