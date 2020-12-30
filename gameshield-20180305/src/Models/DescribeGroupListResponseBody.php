<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupListResponseBody\groupList;
use AlibabaCloud\Tea\Model;

class DescribeGroupListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groupList[]
     */
    public $groupList;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'groupList'  => 'GroupList',
        'total'      => 'Total',
        'promptInfo' => 'PromptInfo',
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
        if (null !== $this->groupList) {
            $res['GroupList'] = [];
            if (null !== $this->groupList && \is_array($this->groupList)) {
                $n = 0;
                foreach ($this->groupList as $item) {
                    $res['GroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n                = 0;
                foreach ($map['GroupList'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
