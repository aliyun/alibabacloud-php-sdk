<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetNetworkAvailableZonesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $zoneIdList;
    protected $_name = [
        'zoneIdList' => 'ZoneIdList',
    ];

    public function validate()
    {
        if (\is_array($this->zoneIdList)) {
            Model::validateArray($this->zoneIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
