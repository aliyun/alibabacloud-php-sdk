<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\nonExistIds;

class QueryFpShotJobListResponseBody extends Model
{
    /**
     * @var fpShotJobList
     */
    public $fpShotJobList;

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
        'fpShotJobList' => 'FpShotJobList',
        'nextPageToken' => 'NextPageToken',
        'nonExistIds' => 'NonExistIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fpShotJobList) {
            $this->fpShotJobList->validate();
        }
        if (null !== $this->nonExistIds) {
            $this->nonExistIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotJobList) {
            $res['FpShotJobList'] = null !== $this->fpShotJobList ? $this->fpShotJobList->toArray($noStream) : $this->fpShotJobList;
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
        if (isset($map['FpShotJobList'])) {
            $model->fpShotJobList = fpShotJobList::fromMap($map['FpShotJobList']);
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
