<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesResponseBody\nodeList;
use AlibabaCloud\Tea\Model;

class DescribeFullNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var nodeList[]
     */
    public $nodeList;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'nodeList'   => 'NodeList',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = [];
            if (null !== $this->nodeList && \is_array($this->nodeList)) {
                $n = 0;
                foreach ($this->nodeList as $item) {
                    $res['NodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFullNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n               = 0;
                foreach ($map['NodeList'] as $item) {
                    $model->nodeList[$n++] = null !== $item ? nodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
