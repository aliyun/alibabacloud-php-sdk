<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizListResponseBody\bizList;
use AlibabaCloud\Tea\Model;

class DescribeBizListResponseBody extends Model
{
    /**
     * @var bizList[]
     */
    public $bizList;

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
    protected $_name = [
        'bizList'    => 'BizList',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'promptInfo' => 'PromptInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizList) {
            $res['BizList'] = [];
            if (null !== $this->bizList && \is_array($this->bizList)) {
                $n = 0;
                foreach ($this->bizList as $item) {
                    $res['BizList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeBizListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizList'])) {
            if (!empty($map['BizList'])) {
                $model->bizList = [];
                $n              = 0;
                foreach ($map['BizList'] as $item) {
                    $model->bizList[$n++] = null !== $item ? bizList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
