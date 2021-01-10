<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\nonExistFileURLs;
use AlibabaCloud\Tea\Model;

class QueryMediaListByURLResponseBody extends Model
{
    /**
     * @var mediaList
     */
    public $mediaList;

    /**
     * @var nonExistFileURLs
     */
    public $nonExistFileURLs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaList'        => 'MediaList',
        'nonExistFileURLs' => 'NonExistFileURLs',
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
        if (null !== $this->nonExistFileURLs) {
            $res['NonExistFileURLs'] = null !== $this->nonExistFileURLs ? $this->nonExistFileURLs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaListByURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaList'])) {
            $model->mediaList = mediaList::fromMap($map['MediaList']);
        }
        if (isset($map['NonExistFileURLs'])) {
            $model->nonExistFileURLs = nonExistFileURLs::fromMap($map['NonExistFileURLs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
