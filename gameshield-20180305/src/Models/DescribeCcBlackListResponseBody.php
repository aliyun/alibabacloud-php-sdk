<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeCcBlackListResponseBody extends Model
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
     * @var string[]
     */
    public $blackList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'promptInfo' => 'PromptInfo',
        'blackList'  => 'BlackList',
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
        if (null !== $this->blackList) {
            $res['BlackList'] = $this->blackList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcBlackListResponseBody
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
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = $map['BlackList'];
            }
        }

        return $model;
    }
}
