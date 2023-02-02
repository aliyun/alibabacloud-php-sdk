<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneResponseBody\zoneList;
use AlibabaCloud\Tea\Model;

class DescribeInstanceCreatableZoneResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of zones.
     *
     * @var zoneList[]
     */
    public $zoneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'zoneList'  => 'ZoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneList) {
            $res['ZoneList'] = [];
            if (null !== $this->zoneList && \is_array($this->zoneList)) {
                $n = 0;
                foreach ($this->zoneList as $item) {
                    $res['ZoneList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceCreatableZoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneList'])) {
            if (!empty($map['ZoneList'])) {
                $model->zoneList = [];
                $n               = 0;
                foreach ($map['ZoneList'] as $item) {
                    $model->zoneList[$n++] = null !== $item ? zoneList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
