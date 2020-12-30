<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeL4EventsSelectiveResponseBody\esnL4EventList;
use AlibabaCloud\Tea\Model;

class DescribeL4EventsSelectiveResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var esnL4EventList[]
     */
    public $esnL4EventList;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'      => 'RequestId',
        'esnL4EventList' => 'EsnL4EventList',
        'total'          => 'Total',
        'promptInfo'     => 'PromptInfo',
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
        if (null !== $this->esnL4EventList) {
            $res['EsnL4EventList'] = [];
            if (null !== $this->esnL4EventList && \is_array($this->esnL4EventList)) {
                $n = 0;
                foreach ($this->esnL4EventList as $item) {
                    $res['EsnL4EventList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeL4EventsSelectiveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EsnL4EventList'])) {
            if (!empty($map['EsnL4EventList'])) {
                $model->esnL4EventList = [];
                $n                     = 0;
                foreach ($map['EsnL4EventList'] as $item) {
                    $model->esnL4EventList[$n++] = null !== $item ? esnL4EventList::fromMap($item) : $item;
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
