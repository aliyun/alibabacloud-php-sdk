<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones\supportedEngines;

class availableZones extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var supportedEngines[]
     */
    public $supportedEngines;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId' => 'RegionId',
        'supportedEngines' => 'SupportedEngines',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->supportedEngines)) {
            Model::validateArray($this->supportedEngines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supportedEngines) {
            if (\is_array($this->supportedEngines)) {
                $res['SupportedEngines'] = [];
                $n1 = 0;
                foreach ($this->supportedEngines as $item1) {
                    $res['SupportedEngines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupportedEngines'])) {
            if (!empty($map['SupportedEngines'])) {
                $model->supportedEngines = [];
                $n1 = 0;
                foreach ($map['SupportedEngines'] as $item1) {
                    $model->supportedEngines[$n1] = supportedEngines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
