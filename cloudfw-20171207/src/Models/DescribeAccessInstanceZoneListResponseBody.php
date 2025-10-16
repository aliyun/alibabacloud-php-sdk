<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAccessInstanceZoneListResponseBody\zones;

class DescribeAccessInstanceZoneListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $zoneList;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'requestId' => 'RequestId',
        'zoneList' => 'ZoneList',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->zoneList)) {
            Model::validateArray($this->zoneList);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
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
                    $res['ZoneList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->zoneList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
