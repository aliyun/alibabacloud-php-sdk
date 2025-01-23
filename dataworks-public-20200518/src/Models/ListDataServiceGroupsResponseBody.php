<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsResponseBody\groupPagingResult;

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
        if (null !== $this->groupPagingResult) {
            $this->groupPagingResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupPagingResult) {
            $res['GroupPagingResult'] = null !== $this->groupPagingResult ? $this->groupPagingResult->toArray($noStream) : $this->groupPagingResult;
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
        if (isset($map['GroupPagingResult'])) {
            $model->groupPagingResult = groupPagingResult::fromMap($map['GroupPagingResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
