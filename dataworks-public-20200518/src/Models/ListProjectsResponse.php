<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponse\pageResult;
use AlibabaCloud\Tea\Model;

class ListProjectsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageResult
     */
    public $pageResult;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pageResult' => 'PageResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageResult', $this->pageResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageResult) {
            $res['PageResult'] = null !== $this->pageResult ? $this->pageResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageResult'])) {
            $model->pageResult = pageResult::fromMap($map['PageResult']);
        }

        return $model;
    }
}
