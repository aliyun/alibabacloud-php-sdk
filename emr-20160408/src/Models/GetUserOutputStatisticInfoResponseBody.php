<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoResponseBody\userOutputList;
use AlibabaCloud\Tea\Model;

class GetUserOutputStatisticInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userOutputList
     */
    public $userOutputList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'userOutputList' => 'UserOutputList',
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
        if (null !== $this->userOutputList) {
            $res['UserOutputList'] = null !== $this->userOutputList ? $this->userOutputList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserOutputStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserOutputList'])) {
            $model->userOutputList = userOutputList::fromMap($map['UserOutputList']);
        }

        return $model;
    }
}
