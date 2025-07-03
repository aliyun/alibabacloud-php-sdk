<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneResponseBody\zoneList;

class DescribeInstanceCreatableZoneResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var zoneList[]
     */
    public $zoneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'zoneList' => 'ZoneList',
    ];

    public function validate()
    {
        if (\is_array($this->zoneList)) {
            Model::validateArray($this->zoneList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->zoneList) {
            if (\is_array($this->zoneList)) {
                $res['ZoneList'] = [];
                $n1 = 0;
                foreach ($this->zoneList as $item1) {
                    $res['ZoneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ZoneList'])) {
            if (!empty($map['ZoneList'])) {
                $model->zoneList = [];
                $n1 = 0;
                foreach ($map['ZoneList'] as $item1) {
                    $model->zoneList[$n1] = zoneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
