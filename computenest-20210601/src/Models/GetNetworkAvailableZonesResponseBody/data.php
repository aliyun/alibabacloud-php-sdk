<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetNetworkAvailableZonesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $regionIdList;

    /**
     * @var string[]
     */
    public $zoneIdList;
    protected $_name = [
        'regionIdList' => 'RegionIdList',
        'zoneIdList' => 'ZoneIdList',
    ];

    public function validate()
    {
        if (\is_array($this->regionIdList)) {
            Model::validateArray($this->regionIdList);
        }
        if (\is_array($this->zoneIdList)) {
            Model::validateArray($this->zoneIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionIdList) {
            if (\is_array($this->regionIdList)) {
                $res['RegionIdList'] = [];
                $n1 = 0;
                foreach ($this->regionIdList as $item1) {
                    $res['RegionIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneIdList) {
            if (\is_array($this->zoneIdList)) {
                $res['ZoneIdList'] = [];
                $n1 = 0;
                foreach ($this->zoneIdList as $item1) {
                    $res['ZoneIdList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['RegionIdList'])) {
            if (!empty($map['RegionIdList'])) {
                $model->regionIdList = [];
                $n1 = 0;
                foreach ($map['RegionIdList'] as $item1) {
                    $model->regionIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneIdList'])) {
            if (!empty($map['ZoneIdList'])) {
                $model->zoneIdList = [];
                $n1 = 0;
                foreach ($map['ZoneIdList'] as $item1) {
                    $model->zoneIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
