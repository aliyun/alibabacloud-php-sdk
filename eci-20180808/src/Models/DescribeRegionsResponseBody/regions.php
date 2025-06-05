<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string[]
     */
    public $recommendZones;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $unavailableZones;

    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'recommendZones' => 'RecommendZones',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId' => 'RegionId',
        'unavailableZones' => 'UnavailableZones',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->recommendZones)) {
            Model::validateArray($this->recommendZones);
        }
        if (\is_array($this->unavailableZones)) {
            Model::validateArray($this->unavailableZones);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendZones) {
            if (\is_array($this->recommendZones)) {
                $res['RecommendZones'] = [];
                $n1 = 0;
                foreach ($this->recommendZones as $item1) {
                    $res['RecommendZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->unavailableZones) {
            if (\is_array($this->unavailableZones)) {
                $res['UnavailableZones'] = [];
                $n1 = 0;
                foreach ($this->unavailableZones as $item1) {
                    $res['UnavailableZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RecommendZones'])) {
            if (!empty($map['RecommendZones'])) {
                $model->recommendZones = [];
                $n1 = 0;
                foreach ($map['RecommendZones'] as $item1) {
                    $model->recommendZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UnavailableZones'])) {
            if (!empty($map['UnavailableZones'])) {
                $model->unavailableZones = [];
                $n1 = 0;
                foreach ($map['UnavailableZones'] as $item1) {
                    $model->unavailableZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
