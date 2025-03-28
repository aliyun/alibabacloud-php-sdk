<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;

class ListProjectsResponseBody extends Model
{
    /**
     * @var pageResult
     */
    public $pageResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageResult' => 'PageResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pageResult) {
            $this->pageResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageResult) {
            $res['PageResult'] = null !== $this->pageResult ? $this->pageResult->toArray($noStream) : $this->pageResult;
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
        if (isset($map['PageResult'])) {
            $model->pageResult = pageResult::fromMap($map['PageResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
