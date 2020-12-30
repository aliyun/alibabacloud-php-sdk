<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailResponseBody\failList;
use AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailResponseBody\successList;
use AlibabaCloud\Tea\Model;

class ConfirmTransferInEmailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successList
     */
    public $successList;

    /**
     * @var failList
     */
    public $failList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'successList' => 'SuccessList',
        'failList'    => 'FailList',
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
        if (null !== $this->successList) {
            $res['SuccessList'] = null !== $this->successList ? $this->successList->toMap() : null;
        }
        if (null !== $this->failList) {
            $res['FailList'] = null !== $this->failList ? $this->failList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmTransferInEmailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessList'])) {
            $model->successList = successList::fromMap($map['SuccessList']);
        }
        if (isset($map['FailList'])) {
            $model->failList = failList::fromMap($map['FailList']);
        }

        return $model;
    }
}
