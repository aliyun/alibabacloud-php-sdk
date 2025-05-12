<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody\mediaBucketList;

class ListAllMediaBucketResponseBody extends Model
{
    /**
     * @var mediaBucketList
     */
    public $mediaBucketList;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaBucketList' => 'MediaBucketList',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaBucketList) {
            $this->mediaBucketList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaBucketList) {
            $res['MediaBucketList'] = null !== $this->mediaBucketList ? $this->mediaBucketList->toArray($noStream) : $this->mediaBucketList;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
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
        if (isset($map['MediaBucketList'])) {
            $model->mediaBucketList = mediaBucketList::fromMap($map['MediaBucketList']);
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
