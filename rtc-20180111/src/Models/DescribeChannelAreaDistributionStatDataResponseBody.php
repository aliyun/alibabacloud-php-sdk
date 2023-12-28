<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelAreaDistributionStatDataResponseBody\areaStatList;
use AlibabaCloud\Tea\Model;

class DescribeChannelAreaDistributionStatDataResponseBody extends Model
{
    /**
     * @var areaStatList[]
     */
    public $areaStatList;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areaStatList' => 'AreaStatList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaStatList) {
            $res['AreaStatList'] = [];
            if (null !== $this->areaStatList && \is_array($this->areaStatList)) {
                $n = 0;
                foreach ($this->areaStatList as $item) {
                    $res['AreaStatList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeChannelAreaDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaStatList'])) {
            if (!empty($map['AreaStatList'])) {
                $model->areaStatList = [];
                $n                   = 0;
                foreach ($map['AreaStatList'] as $item) {
                    $model->areaStatList[$n++] = null !== $item ? areaStatList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
