<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNodePoolResponseBody\nodePoolList;
use AlibabaCloud\Tea\Model;

class DescribeRCNodePoolResponseBody extends Model
{
    /**
     * @var nodePoolList[]
     */
    public $nodePoolList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodePoolList' => 'NodePoolList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodePoolList) {
            $res['NodePoolList'] = [];
            if (null !== $this->nodePoolList && \is_array($this->nodePoolList)) {
                $n = 0;
                foreach ($this->nodePoolList as $item) {
                    $res['NodePoolList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRCNodePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodePoolList'])) {
            if (!empty($map['NodePoolList'])) {
                $model->nodePoolList = [];
                $n                   = 0;
                foreach ($map['NodePoolList'] as $item) {
                    $model->nodePoolList[$n++] = null !== $item ? nodePoolList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
