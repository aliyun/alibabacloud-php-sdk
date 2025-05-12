<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\nonExistMediaInfoJobIds;

class QueryMediaInfoJobListResponseBody extends Model
{
    /**
     * @var mediaInfoJobList
     */
    public $mediaInfoJobList;

    /**
     * @var nonExistMediaInfoJobIds
     */
    public $nonExistMediaInfoJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaInfoJobList' => 'MediaInfoJobList',
        'nonExistMediaInfoJobIds' => 'NonExistMediaInfoJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaInfoJobList) {
            $this->mediaInfoJobList->validate();
        }
        if (null !== $this->nonExistMediaInfoJobIds) {
            $this->nonExistMediaInfoJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaInfoJobList) {
            $res['MediaInfoJobList'] = null !== $this->mediaInfoJobList ? $this->mediaInfoJobList->toArray($noStream) : $this->mediaInfoJobList;
        }

        if (null !== $this->nonExistMediaInfoJobIds) {
            $res['NonExistMediaInfoJobIds'] = null !== $this->nonExistMediaInfoJobIds ? $this->nonExistMediaInfoJobIds->toArray($noStream) : $this->nonExistMediaInfoJobIds;
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
        if (isset($map['MediaInfoJobList'])) {
            $model->mediaInfoJobList = mediaInfoJobList::fromMap($map['MediaInfoJobList']);
        }

        if (isset($map['NonExistMediaInfoJobIds'])) {
            $model->nonExistMediaInfoJobIds = nonExistMediaInfoJobIds::fromMap($map['NonExistMediaInfoJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
