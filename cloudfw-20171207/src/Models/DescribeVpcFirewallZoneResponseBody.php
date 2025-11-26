<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallZoneResponseBody\zoneList;

class DescribeVpcFirewallZoneResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var zoneList[][]
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
                    if (\is_array($item1)) {
                        $res['ZoneList'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ZoneList'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
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
                    if (!empty($item1)) {
                        $model->zoneList[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->zoneList[$n1][$n2] = zoneList::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
