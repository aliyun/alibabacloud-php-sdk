<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\nonExistFileURLs;

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
        'mediaList' => 'MediaList',
        'nonExistFileURLs' => 'NonExistFileURLs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaList) {
            $this->mediaList->validate();
        }
        if (null !== $this->nonExistFileURLs) {
            $this->nonExistFileURLs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaList) {
            $res['MediaList'] = null !== $this->mediaList ? $this->mediaList->toArray($noStream) : $this->mediaList;
        }

        if (null !== $this->nonExistFileURLs) {
            $res['NonExistFileURLs'] = null !== $this->nonExistFileURLs ? $this->nonExistFileURLs->toArray($noStream) : $this->nonExistFileURLs;
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

        if (isset($map['NonExistFileURLs'])) {
            $model->nonExistFileURLs = nonExistFileURLs::fromMap($map['NonExistFileURLs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
