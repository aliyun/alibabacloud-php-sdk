<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody\areas\regionList;
use AlibabaCloud\Tea\Model;

class areas extends Model
{
    /**
     * @description The ID of the acceleration area.
     *
     * @example cn-huabei
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The name of the acceleration area.
     *
     * @example 华北
     *
     * @var string
     */
    public $localName;

    /**
     * @description The information about acceleration regions.
     *
     * @var regionList[]
     */
    public $regionList;
    protected $_name = [
        'areaId'     => 'AreaId',
        'localName'  => 'LocalName',
        'regionList' => 'RegionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = [];
            if (null !== $this->regionList && \is_array($this->regionList)) {
                $n = 0;
                foreach ($this->regionList as $item) {
                    $res['RegionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n                 = 0;
                foreach ($map['RegionList'] as $item) {
                    $model->regionList[$n++] = null !== $item ? regionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
