<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @description The supported zones.
     *
     * @var availableZoneList[]
     */
    public $availableZoneList;

    /**
     * @description The resources available in the supported editions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The supported edition. Valid values:
     *
     *   **basic**: Basic Edition
     *   **cluster**: Cluster Edition
     *   **mixed_storage**: elastic mode for Cluster Edition
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableZoneList' => 'AvailableZoneList',
        'regionId'          => 'RegionId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZoneList) {
            $res['AvailableZoneList'] = [];
            if (null !== $this->availableZoneList && \is_array($this->availableZoneList)) {
                $n = 0;
                foreach ($this->availableZoneList as $item) {
                    $res['AvailableZoneList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAvailableResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZoneList'])) {
            if (!empty($map['AvailableZoneList'])) {
                $model->availableZoneList = [];
                $n                        = 0;
                foreach ($map['AvailableZoneList'] as $item) {
                    $model->availableZoneList[$n++] = null !== $item ? availableZoneList::fromMap($item) : $item;
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
