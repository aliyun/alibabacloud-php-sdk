<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\QueryKnoxUserPasswordResponseBody\userInfoList;
use AlibabaCloud\Tea\Model;

class QueryKnoxUserPasswordResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userInfoList
     */
    public $userInfoList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'userInfoList' => 'UserInfoList',
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
        if (null !== $this->userInfoList) {
            $res['UserInfoList'] = null !== $this->userInfoList ? $this->userInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryKnoxUserPasswordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserInfoList'])) {
            $model->userInfoList = userInfoList::fromMap($map['UserInfoList']);
        }

        return $model;
    }
}
