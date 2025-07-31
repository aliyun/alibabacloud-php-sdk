<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskRegionResponseBody\regionList;
use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskRegionResponseBody extends Model
{
    /**
     * @description The region ID.
     *
     * @var regionList[]
     */
    public $regionList;

    /**
     * @description The request ID.
     *
     * @example 3C4A2494-XXXX-XXXX-93CF-548DB3375193
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionList' => 'RegionList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionList) {
            $res['RegionList'] = [];
            if (null !== $this->regionList && \is_array($this->regionList)) {
                $n = 0;
                foreach ($this->regionList as $item) {
                    $res['RegionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationTaskRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n = 0;
                foreach ($map['RegionList'] as $item) {
                    $model->regionList[$n++] = null !== $item ? regionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
