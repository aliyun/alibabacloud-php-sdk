<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobListResponseBody\jobs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryIProductionJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobs
     */
    public $jobs;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'     => 'RequestId',
        'jobs'          => 'Jobs',
        'nextPageToken' => 'NextPageToken',
        'nonExistIds'   => 'NonExistIds',
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
        if (null !== $this->jobs) {
            $res['Jobs'] = null !== $this->jobs ? $this->jobs->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIProductionJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Jobs'])) {
            $model->jobs = jobs::fromMap($map['Jobs']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
