<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsResponseBody\groupPagingResult;
use AlibabaCloud\Tea\Model;

class ListDataServiceGroupsResponseBody extends Model
{
    /**
     * @var groupPagingResult
     */
    public $groupPagingResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupPagingResult' => 'GroupPagingResult',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupPagingResult) {
            $res['GroupPagingResult'] = null !== $this->groupPagingResult ? $this->groupPagingResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupPagingResult'])) {
            $model->groupPagingResult = groupPagingResult::fromMap($map['GroupPagingResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
