<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var availableZoneList[]
     */
    public $availableZoneList;
    protected $_name = [
        'regionId'          => 'RegionId',
        'requestId'         => 'RequestId',
        'availableZoneList' => 'AvailableZoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->availableZoneList) {
            $res['AvailableZoneList'] = [];
            if (null !== $this->availableZoneList && \is_array($this->availableZoneList)) {
                $n = 0;
                foreach ($this->availableZoneList as $item) {
                    $res['AvailableZoneList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailableZoneList'])) {
            if (!empty($map['AvailableZoneList'])) {
                $model->availableZoneList = [];
                $n                        = 0;
                foreach ($map['AvailableZoneList'] as $item) {
                    $model->availableZoneList[$n++] = null !== $item ? availableZoneList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
