<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayAvailableZonesResponseBody\availableZoneIdList;

class DescribeVpnGatewayAvailableZonesResponseBody extends Model
{
    /**
     * @var availableZoneIdList[]
     */
    public $availableZoneIdList;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableZoneIdList' => 'AvailableZoneIdList',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->availableZoneIdList)) {
            Model::validateArray($this->availableZoneIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZoneIdList) {
            if (\is_array($this->availableZoneIdList)) {
                $res['AvailableZoneIdList'] = [];
                $n1                         = 0;
                foreach ($this->availableZoneIdList as $item1) {
                    $res['AvailableZoneIdList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AvailableZoneIdList'])) {
            if (!empty($map['AvailableZoneIdList'])) {
                $model->availableZoneIdList = [];
                $n1                         = 0;
                foreach ($map['AvailableZoneIdList'] as $item1) {
                    $model->availableZoneIdList[$n1++] = availableZoneIdList::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
