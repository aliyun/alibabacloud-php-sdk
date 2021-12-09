<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\nonExistPrimaryKeys;
use AlibabaCloud\Tea\Model;

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
     * @var nonExistPrimaryKeys
     */
    public $nonExistPrimaryKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpShotJobList'       => 'FpShotJobList',
        'nextPageToken'       => 'NextPageToken',
        'nonExistIds'         => 'NonExistIds',
        'nonExistPrimaryKeys' => 'NonExistPrimaryKeys',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpShotJobList) {
            $res['FpShotJobList'] = null !== $this->fpShotJobList ? $this->fpShotJobList->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->nonExistPrimaryKeys) {
            $res['NonExistPrimaryKeys'] = null !== $this->nonExistPrimaryKeys ? $this->nonExistPrimaryKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFpShotJobListResponseBody
     */
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
        if (isset($map['NonExistPrimaryKeys'])) {
            $model->nonExistPrimaryKeys = nonExistPrimaryKeys::fromMap($map['NonExistPrimaryKeys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
