<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody\mediaBucketList;
use AlibabaCloud\Tea\Model;

class ListAllMediaBucketResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var mediaBucketList
     */
    public $mediaBucketList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextPageToken'   => 'NextPageToken',
        'mediaBucketList' => 'MediaBucketList',
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
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->mediaBucketList) {
            $res['MediaBucketList'] = null !== $this->mediaBucketList ? $this->mediaBucketList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllMediaBucketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['MediaBucketList'])) {
            $model->mediaBucketList = mediaBucketList::fromMap($map['MediaBucketList']);
        }

        return $model;
    }
}
