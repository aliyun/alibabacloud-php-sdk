<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserInputStatisticInfoResponseBody\userInputList;
use AlibabaCloud\Tea\Model;

class GetUserInputStatisticInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userInputList
     */
    public $userInputList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'userInputList' => 'UserInputList',
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
        if (null !== $this->userInputList) {
            $res['UserInputList'] = null !== $this->userInputList ? $this->userInputList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserInputStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserInputList'])) {
            $model->userInputList = userInputList::fromMap($map['UserInputList']);
        }

        return $model;
    }
}
