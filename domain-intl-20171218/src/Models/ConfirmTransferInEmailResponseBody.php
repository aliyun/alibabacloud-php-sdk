<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\ConfirmTransferInEmailResponseBody\failList;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\ConfirmTransferInEmailResponseBody\successList;
use AlibabaCloud\Tea\Model;

class ConfirmTransferInEmailResponseBody extends Model
{
    /**
     * @var failList
     */
    public $failList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successList
     */
    public $successList;
    protected $_name = [
        'failList'    => 'FailList',
        'requestId'   => 'RequestId',
        'successList' => 'SuccessList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failList) {
            $res['FailList'] = null !== $this->failList ? $this->failList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successList) {
            $res['SuccessList'] = null !== $this->successList ? $this->successList->toMap() : null;
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
        if (isset($map['FailList'])) {
            $model->failList = failList::fromMap($map['FailList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessList'])) {
            $model->successList = successList::fromMap($map['SuccessList']);
        }

        return $model;
    }
}
