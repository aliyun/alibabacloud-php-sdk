<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\nonExistIds;

class QueryMediaCensorJobListResponseBody extends Model
{
    /**
     * @var mediaCensorJobList
     */
    public $mediaCensorJobList;
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaCensorJobList' => 'MediaCensorJobList',
        'nextPageToken'      => 'NextPageToken',
        'nonExistIds'        => 'NonExistIds',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaCensorJobList) {
            $this->mediaCensorJobList->validate();
        }
        if (null !== $this->nonExistIds) {
            $this->nonExistIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaCensorJobList) {
            $res['MediaCensorJobList'] = null !== $this->mediaCensorJobList ? $this->mediaCensorJobList->toArray($noStream) : $this->mediaCensorJobList;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toArray($noStream) : $this->nonExistIds;
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
        if (isset($map['MediaCensorJobList'])) {
            $model->mediaCensorJobList = mediaCensorJobList::fromMap($map['MediaCensorJobList']);
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
