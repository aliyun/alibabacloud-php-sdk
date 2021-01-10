<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\imageSearchJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryImageSearchJobListResponseBody extends Model
{
    /**
     * @var imageSearchJobList
     */
    public $imageSearchJobList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'imageSearchJobList' => 'ImageSearchJobList',
        'requestId'          => 'RequestId',
        'nonExistIds'        => 'NonExistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageSearchJobList) {
            $res['ImageSearchJobList'] = null !== $this->imageSearchJobList ? $this->imageSearchJobList->toMap() : null;
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
     * @return QueryImageSearchJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageSearchJobList'])) {
            $model->imageSearchJobList = imageSearchJobList::fromMap($map['ImageSearchJobList']);
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
