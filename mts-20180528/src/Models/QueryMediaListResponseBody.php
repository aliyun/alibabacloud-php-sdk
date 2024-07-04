<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListResponseBody\mediaList;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListResponseBody\nonExistMediaIds;
use AlibabaCloud\Tea\Model;

class QueryMediaListResponseBody extends Model
{
    /**
     * @var mediaList
     */
    public $mediaList;

    /**
     * @var nonExistMediaIds
     */
    public $nonExistMediaIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaList'        => 'MediaList',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaList) {
            $res['MediaList'] = null !== $this->mediaList ? $this->mediaList->toMap() : null;
        }
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = null !== $this->nonExistMediaIds ? $this->nonExistMediaIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaList'])) {
            $model->mediaList = mediaList::fromMap($map['MediaList']);
        }
        if (isset($map['NonExistMediaIds'])) {
            $model->nonExistMediaIds = nonExistMediaIds::fromMap($map['NonExistMediaIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
