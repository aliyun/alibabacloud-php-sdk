<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList;
use AlibabaCloud\Tea\Model;

class QueryPornJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pornJobList
     */
    public $pornJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pornJobList' => 'PornJobList',
        'nonExistIds' => 'NonExistIds',
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
        if (null !== $this->pornJobList) {
            $res['PornJobList'] = null !== $this->pornJobList ? $this->pornJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPornJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PornJobList'])) {
            $model->pornJobList = pornJobList::fromMap($map['PornJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
