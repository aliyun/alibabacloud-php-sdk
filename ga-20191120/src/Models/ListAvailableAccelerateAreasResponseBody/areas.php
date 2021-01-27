<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody\areas\regionList;
use AlibabaCloud\Tea\Model;

class areas extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $areaId;

    /**
     * @var regionList[]
     */
    public $regionList;
    protected $_name = [
        'localName'  => 'LocalName',
        'areaId'     => 'AreaId',
        'regionList' => 'RegionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
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
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
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
