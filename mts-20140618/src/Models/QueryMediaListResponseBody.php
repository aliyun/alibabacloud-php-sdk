<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\nonExistMediaIds;

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
        'mediaList' => 'MediaList',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaList) {
            $this->mediaList->validate();
        }
        if (null !== $this->nonExistMediaIds) {
            $this->nonExistMediaIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaList) {
            $res['MediaList'] = null !== $this->mediaList ? $this->mediaList->toArray($noStream) : $this->mediaList;
        }

        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = null !== $this->nonExistMediaIds ? $this->nonExistMediaIds->toArray($noStream) : $this->nonExistMediaIds;
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
