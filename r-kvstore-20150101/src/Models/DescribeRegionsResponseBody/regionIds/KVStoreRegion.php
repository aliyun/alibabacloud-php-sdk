<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRegionsResponseBody\regionIds\KVStoreRegion\zoneIdList;
use AlibabaCloud\Tea\Model;

class KVStoreRegion extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneIds;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var zoneIdList
     */
    public $zoneIdList;
    protected $_name = [
        'regionId'       => 'RegionId',
        'zoneIds'        => 'ZoneIds',
        'localName'      => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'zoneIdList'     => 'ZoneIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->zoneIdList) {
            $res['ZoneIdList'] = null !== $this->zoneIdList ? $this->zoneIdList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KVStoreRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['ZoneIdList'])) {
            $model->zoneIdList = zoneIdList::fromMap($map['ZoneIdList']);
        }

        return $model;
    }
}
