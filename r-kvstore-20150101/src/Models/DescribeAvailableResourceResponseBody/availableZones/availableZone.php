<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;

class availableZone extends Model
{
    /**
     * @var bool
     */
    public $isMainSale;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var supportedEngines
     */
    public $supportedEngines;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'isMainSale' => 'IsMainSale',
        'regionId' => 'RegionId',
        'supportedEngines' => 'SupportedEngines',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        if (null !== $this->supportedEngines) {
            $this->supportedEngines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isMainSale) {
            $res['IsMainSale'] = $this->isMainSale;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = null !== $this->supportedEngines ? $this->supportedEngines->toArray($noStream) : $this->supportedEngines;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['IsMainSale'])) {
            $model->isMainSale = $map['IsMainSale'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupportedEngines'])) {
            $model->supportedEngines = supportedEngines::fromMap($map['SupportedEngines']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
