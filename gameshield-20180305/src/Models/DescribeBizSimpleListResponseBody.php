<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizSimpleListResponseBody\bizSimpleList;
use AlibabaCloud\Tea\Model;

class DescribeBizSimpleListResponseBody extends Model
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
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var bizSimpleList[]
     */
    public $bizSimpleList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'total'         => 'Total',
        'promptInfo'    => 'PromptInfo',
        'bizSimpleList' => 'BizSimpleList',
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
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->bizSimpleList) {
            $res['BizSimpleList'] = [];
            if (null !== $this->bizSimpleList && \is_array($this->bizSimpleList)) {
                $n = 0;
                foreach ($this->bizSimpleList as $item) {
                    $res['BizSimpleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBizSimpleListResponseBody
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
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['BizSimpleList'])) {
            if (!empty($map['BizSimpleList'])) {
                $model->bizSimpleList = [];
                $n                    = 0;
                foreach ($map['BizSimpleList'] as $item) {
                    $model->bizSimpleList[$n++] = null !== $item ? bizSimpleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
