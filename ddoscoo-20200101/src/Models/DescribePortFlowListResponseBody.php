<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortFlowListResponseBody\portFlowList;
use AlibabaCloud\Tea\Model;

class DescribePortFlowListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var portFlowList[]
     */
    public $portFlowList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'portFlowList' => 'PortFlowList',
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
        if (null !== $this->portFlowList) {
            $res['PortFlowList'] = [];
            if (null !== $this->portFlowList && \is_array($this->portFlowList)) {
                $n = 0;
                foreach ($this->portFlowList as $item) {
                    $res['PortFlowList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PortFlowList'])) {
            if (!empty($map['PortFlowList'])) {
                $model->portFlowList = [];
                $n                   = 0;
                foreach ($map['PortFlowList'] as $item) {
                    $model->portFlowList[$n++] = null !== $item ? portFlowList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
