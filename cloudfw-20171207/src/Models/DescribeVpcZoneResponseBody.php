<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcZoneResponseBody\zoneList;
use AlibabaCloud\Tea\Model;

class DescribeVpcZoneResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 694DFBF3-C060-529F-92D0-7FC7E0DA1E21
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The zones.
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
     * @return DescribeVpcZoneResponseBody
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
