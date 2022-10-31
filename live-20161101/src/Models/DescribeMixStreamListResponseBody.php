<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponseBody\mixStreamList;
use AlibabaCloud\Tea\Model;

class DescribeMixStreamListResponseBody extends Model
{
    /**
     * @var mixStreamList[]
     */
    public $mixStreamList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'mixStreamList' => 'MixStreamList',
        'requestId'     => 'RequestId',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixStreamList) {
            $res['MixStreamList'] = [];
            if (null !== $this->mixStreamList && \is_array($this->mixStreamList)) {
                $n = 0;
                foreach ($this->mixStreamList as $item) {
                    $res['MixStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMixStreamListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MixStreamList'])) {
            if (!empty($map['MixStreamList'])) {
                $model->mixStreamList = [];
                $n                    = 0;
                foreach ($map['MixStreamList'] as $item) {
                    $model->mixStreamList[$n++] = null !== $item ? mixStreamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
