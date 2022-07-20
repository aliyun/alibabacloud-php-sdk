<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryCensorJobListResponseBody extends Model
{
    /**
     * @var jobs
     */
    public $jobs;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobs'        => 'Jobs',
        'nonExistIds' => 'NonExistIds',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['Jobs'] = null !== $this->jobs ? $this->jobs->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCensorJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Jobs'])) {
            $model->jobs = jobs::fromMap($map['Jobs']);
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
