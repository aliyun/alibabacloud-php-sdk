<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody\portFlowList;
use AlibabaCloud\Tea\Model;

class DescribePortFlowListResponseBody extends Model
{
    /**
     * @description The returned traffic data.
     *
     * @var portFlowList[]
     */
    public $portFlowList;

    /**
     * @description The ID of the request.
     *
     * @example FFC77501-BDF8-4BC8-9BF5-B295FBC3189B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portFlowList' => 'PortFlowList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portFlowList) {
            $res['PortFlowList'] = [];
            if (null !== $this->portFlowList && \is_array($this->portFlowList)) {
                $n = 0;
                foreach ($this->portFlowList as $item) {
                    $res['PortFlowList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePortFlowListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortFlowList'])) {
            if (!empty($map['PortFlowList'])) {
                $model->portFlowList = [];
                $n                   = 0;
                foreach ($map['PortFlowList'] as $item) {
                    $model->portFlowList[$n++] = null !== $item ? portFlowList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
