<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsResponse\groupPagingResult;
use AlibabaCloud\Tea\Model;

class ListDataServiceGroupsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groupPagingResult
     */
    public $groupPagingResult;
    protected $_name = [
        'requestId'         => 'RequestId',
        'groupPagingResult' => 'GroupPagingResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupPagingResult', $this->groupPagingResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupPagingResult) {
            $res['GroupPagingResult'] = null !== $this->groupPagingResult ? $this->groupPagingResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceGroupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupPagingResult'])) {
            $model->groupPagingResult = groupPagingResult::fromMap($map['GroupPagingResult']);
        }

        return $model;
    }
}
