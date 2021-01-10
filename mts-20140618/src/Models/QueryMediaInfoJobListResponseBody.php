<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\nonExistMediaInfoJobIds;
use AlibabaCloud\Tea\Model;

class QueryMediaInfoJobListResponseBody extends Model
{
    /**
     * @var nonExistMediaInfoJobIds
     */
    public $nonExistMediaInfoJobIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaInfoJobList
     */
    public $mediaInfoJobList;
    protected $_name = [
        'nonExistMediaInfoJobIds' => 'NonExistMediaInfoJobIds',
        'requestId'               => 'RequestId',
        'mediaInfoJobList'        => 'MediaInfoJobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistMediaInfoJobIds) {
            $res['NonExistMediaInfoJobIds'] = null !== $this->nonExistMediaInfoJobIds ? $this->nonExistMediaInfoJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaInfoJobList) {
            $res['MediaInfoJobList'] = null !== $this->mediaInfoJobList ? $this->mediaInfoJobList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaInfoJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistMediaInfoJobIds'])) {
            $model->nonExistMediaInfoJobIds = nonExistMediaInfoJobIds::fromMap($map['NonExistMediaInfoJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaInfoJobList'])) {
            $model->mediaInfoJobList = mediaInfoJobList::fromMap($map['MediaInfoJobList']);
        }

        return $model;
    }
}
