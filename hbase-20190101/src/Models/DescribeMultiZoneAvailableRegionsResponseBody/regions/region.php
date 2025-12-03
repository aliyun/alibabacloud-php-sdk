<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines;

class region extends Model
{
    /**
     * @var availableCombines
     */
    public $availableCombines;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'availableCombines' => 'AvailableCombines',
        'localName' => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->availableCombines) {
            $this->availableCombines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCombines) {
            $res['AvailableCombines'] = null !== $this->availableCombines ? $this->availableCombines->toArray($noStream) : $this->availableCombines;
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AvailableCombines'])) {
            $model->availableCombines = availableCombines::fromMap($map['AvailableCombines']);
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
