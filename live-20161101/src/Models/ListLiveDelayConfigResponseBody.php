<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveDelayConfigResponseBody\delayConfigList;
use AlibabaCloud\Tea\Model;

class ListLiveDelayConfigResponseBody extends Model
{
    /**
     * @description The stream delay configurations.
     *
     * @var delayConfigList
     */
    public $delayConfigList;

    /**
     * @description The request ID.
     *
     * @example A3136B58-5876-4168-83CA-B562781981A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of stream delay configurations.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'delayConfigList' => 'DelayConfigList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayConfigList) {
            $res['DelayConfigList'] = null !== $this->delayConfigList ? $this->delayConfigList->toMap() : null;
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
     * @return ListLiveDelayConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayConfigList'])) {
            $model->delayConfigList = delayConfigList::fromMap($map['DelayConfigList']);
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
