<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList;
use AlibabaCloud\Tea\Model;

class QueryTagJobListResponseBody extends Model
{
    /**
     * @var tagJobList
     */
    public $tagJobList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'tagJobList'  => 'TagJobList',
        'requestId'   => 'RequestId',
        'nonExistIds' => 'NonExistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagJobList) {
            $res['TagJobList'] = null !== $this->tagJobList ? $this->tagJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTagJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagJobList'])) {
            $model->tagJobList = tagJobList::fromMap($map['TagJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
