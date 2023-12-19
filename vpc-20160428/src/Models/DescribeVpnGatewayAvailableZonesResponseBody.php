<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayAvailableZonesResponseBody\availableZoneIdList;
use AlibabaCloud\Tea\Model;

class DescribeVpnGatewayAvailableZonesResponseBody extends Model
{
    /**
     * @var availableZoneIdList[]
     */
    public $availableZoneIdList;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 29784052-931F-543D-A612-36B3838163FA
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZoneIdList) {
            $res['AvailableZoneIdList'] = [];
            if (null !== $this->availableZoneIdList && \is_array($this->availableZoneIdList)) {
                $n = 0;
                foreach ($this->availableZoneIdList as $item) {
                    $res['AvailableZoneIdList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeVpnGatewayAvailableZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZoneIdList'])) {
            if (!empty($map['AvailableZoneIdList'])) {
                $model->availableZoneIdList = [];
                $n                          = 0;
                foreach ($map['AvailableZoneIdList'] as $item) {
                    $model->availableZoneIdList[$n++] = null !== $item ? availableZoneIdList::fromMap($item) : $item;
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
