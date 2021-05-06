<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponse\flowList;
use AlibabaCloud\Tea\Model;

class DescribeTrafficResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var flowList[]
     */
    public $flowList;
    protected $_name = [
        'requestId' => 'RequestId',
        'flowList'  => 'FlowList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('flowList', $this->flowList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowList) {
            $res['FlowList'] = [];
            if (null !== $this->flowList && \is_array($this->flowList)) {
                $n = 0;
                foreach ($this->flowList as $item) {
                    $res['FlowList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowList'])) {
            if (!empty($map['FlowList'])) {
                $model->flowList = [];
                $n               = 0;
                foreach ($map['FlowList'] as $item) {
                    $model->flowList[$n++] = null !== $item ? flowList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
