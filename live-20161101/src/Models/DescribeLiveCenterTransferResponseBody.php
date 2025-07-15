<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody\liveCenterTransferInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveCenterTransferResponseBody extends Model
{
    /**
     * @description The stream relay information.
     *
     * @var liveCenterTransferInfoList
     */
    public $liveCenterTransferInfoList;

    /**
     * @description The request ID.
     *
     * @example C4865B85-664B-19D3-BB16-C62FB83C8226
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveCenterTransferInfoList' => 'LiveCenterTransferInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveCenterTransferInfoList) {
            $res['LiveCenterTransferInfoList'] = null !== $this->liveCenterTransferInfoList ? $this->liveCenterTransferInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCenterTransferResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveCenterTransferInfoList'])) {
            $model->liveCenterTransferInfoList = liveCenterTransferInfoList::fromMap($map['LiveCenterTransferInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
