<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryMediaCensorJobListResponseBody extends Model
{
    /**
     * @var mediaCensorJobList
     */
    public $mediaCensorJobList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'mediaCensorJobList' => 'MediaCensorJobList',
        'requestId'          => 'RequestId',
        'nextPageToken'      => 'NextPageToken',
        'nonExistIds'        => 'NonExistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaCensorJobList) {
            $res['MediaCensorJobList'] = null !== $this->mediaCensorJobList ? $this->mediaCensorJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaCensorJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaCensorJobList'])) {
            $model->mediaCensorJobList = mediaCensorJobList::fromMap($map['MediaCensorJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
