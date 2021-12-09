<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListResponseBody\mediaFpDeleteJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryMediaFpDeleteJobListResponseBody extends Model
{
    /**
     * @var mediaFpDeleteJobList
     */
    public $mediaFpDeleteJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaFpDeleteJobList' => 'MediaFpDeleteJobList',
        'nonExistIds'          => 'NonExistIds',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaFpDeleteJobList) {
            $res['MediaFpDeleteJobList'] = null !== $this->mediaFpDeleteJobList ? $this->mediaFpDeleteJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaFpDeleteJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaFpDeleteJobList'])) {
            $model->mediaFpDeleteJobList = mediaFpDeleteJobList::fromMap($map['MediaFpDeleteJobList']);
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
