<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;
use AlibabaCloud\Tea\Model;

class ListProjectsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @var pageResult
     */
    public $pageResult;

    /**
     * @description The page number of the returned page.
     *
     * @example 20658801***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageResult' => 'PageResult',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageResult) {
            $res['PageResult'] = null !== $this->pageResult ? $this->pageResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageResult'])) {
            $model->pageResult = pageResult::fromMap($map['PageResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
