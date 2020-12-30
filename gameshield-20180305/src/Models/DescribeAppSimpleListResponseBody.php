<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppSimpleListResponseBody\appSimpleList;
use AlibabaCloud\Tea\Model;

class DescribeAppSimpleListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appSimpleList[]
     */
    public $appSimpleList;

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
        'appSimpleList' => 'AppSimpleList',
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
        if (null !== $this->appSimpleList) {
            $res['AppSimpleList'] = [];
            if (null !== $this->appSimpleList && \is_array($this->appSimpleList)) {
                $n = 0;
                foreach ($this->appSimpleList as $item) {
                    $res['AppSimpleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAppSimpleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppSimpleList'])) {
            if (!empty($map['AppSimpleList'])) {
                $model->appSimpleList = [];
                $n                    = 0;
                foreach ($map['AppSimpleList'] as $item) {
                    $model->appSimpleList[$n++] = null !== $item ? appSimpleList::fromMap($item) : $item;
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
