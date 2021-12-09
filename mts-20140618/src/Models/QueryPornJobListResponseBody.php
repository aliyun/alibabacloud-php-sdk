<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponseBody\pornJobList;
use AlibabaCloud\Tea\Model;

class QueryPornJobListResponseBody extends Model
{
    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var pornJobList
     */
    public $pornJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistIds' => 'NonExistIds',
        'pornJobList' => 'PornJobList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->pornJobList) {
            $res['PornJobList'] = null !== $this->pornJobList ? $this->pornJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }
        if (isset($map['PornJobList'])) {
            $model->pornJobList = pornJobList::fromMap($map['PornJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
