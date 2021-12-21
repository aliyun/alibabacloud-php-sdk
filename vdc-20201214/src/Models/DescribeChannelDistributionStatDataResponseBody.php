<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelDistributionStatDataResponseBody\statList;
use AlibabaCloud\Tea\Model;

class DescribeChannelDistributionStatDataResponseBody extends Model
{
    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 频道分布统计列表。
     *
     * @var statList[]
     */
    public $statList;
    protected $_name = [
        'requestId' => 'RequestId',
        'statList'  => 'StatList',
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
        if (null !== $this->statList) {
            $res['StatList'] = [];
            if (null !== $this->statList && \is_array($this->statList)) {
                $n = 0;
                foreach ($this->statList as $item) {
                    $res['StatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatList'])) {
            if (!empty($map['StatList'])) {
                $model->statList = [];
                $n               = 0;
                foreach ($map['StatList'] as $item) {
                    $model->statList[$n++] = null !== $item ? statList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
