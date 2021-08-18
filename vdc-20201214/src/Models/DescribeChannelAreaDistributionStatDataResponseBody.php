<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelAreaDistributionStatDataResponseBody\areaStatList;
use AlibabaCloud\Tea\Model;

class DescribeChannelAreaDistributionStatDataResponseBody extends Model
{
    /**
     * @description 地域统计列表。
     *
     * @var areaStatList[]
     */
    public $areaStatList;

    /**
     * @description 请求ID。
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
