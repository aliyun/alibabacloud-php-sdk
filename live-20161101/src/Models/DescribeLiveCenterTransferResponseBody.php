<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody\liveCenterTransferInfoList;

class DescribeLiveCenterTransferResponseBody extends Model
{
    /**
     * @var liveCenterTransferInfoList
     */
    public $liveCenterTransferInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveCenterTransferInfoList' => 'LiveCenterTransferInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveCenterTransferInfoList) {
            $this->liveCenterTransferInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveCenterTransferInfoList) {
            $res['LiveCenterTransferInfoList'] = null !== $this->liveCenterTransferInfoList ? $this->liveCenterTransferInfoList->toArray($noStream) : $this->liveCenterTransferInfoList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
