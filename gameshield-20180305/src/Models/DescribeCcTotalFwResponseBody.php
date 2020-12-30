<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTotalFwResponseBody\fwTotalInfoList;
use AlibabaCloud\Tea\Model;

class DescribeCcTotalFwResponseBody extends Model
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
     * @var fwTotalInfoList[]
     */
    public $fwTotalInfoList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'total'           => 'Total',
        'promptInfo'      => 'PromptInfo',
        'fwTotalInfoList' => 'FwTotalInfoList',
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
        if (null !== $this->fwTotalInfoList) {
            $res['FwTotalInfoList'] = [];
            if (null !== $this->fwTotalInfoList && \is_array($this->fwTotalInfoList)) {
                $n = 0;
                foreach ($this->fwTotalInfoList as $item) {
                    $res['FwTotalInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcTotalFwResponseBody
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
        if (isset($map['FwTotalInfoList'])) {
            if (!empty($map['FwTotalInfoList'])) {
                $model->fwTotalInfoList = [];
                $n                      = 0;
                foreach ($map['FwTotalInfoList'] as $item) {
                    $model->fwTotalInfoList[$n++] = null !== $item ? fwTotalInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
