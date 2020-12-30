<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcMaxFwResponseBody\fwMaxInfoList;
use AlibabaCloud\Tea\Model;

class DescribeCcMaxFwResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fwMaxInfoList[]
     */
    public $fwMaxInfoList;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'     => 'RequestId',
        'fwMaxInfoList' => 'FwMaxInfoList',
        'total'         => 'Total',
        'promptInfo'    => 'PromptInfo',
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
        if (null !== $this->fwMaxInfoList) {
            $res['FwMaxInfoList'] = [];
            if (null !== $this->fwMaxInfoList && \is_array($this->fwMaxInfoList)) {
                $n = 0;
                foreach ($this->fwMaxInfoList as $item) {
                    $res['FwMaxInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCcMaxFwResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FwMaxInfoList'])) {
            if (!empty($map['FwMaxInfoList'])) {
                $model->fwMaxInfoList = [];
                $n                    = 0;
                foreach ($map['FwMaxInfoList'] as $item) {
                    $model->fwMaxInfoList[$n++] = null !== $item ? fwMaxInfoList::fromMap($item) : $item;
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
