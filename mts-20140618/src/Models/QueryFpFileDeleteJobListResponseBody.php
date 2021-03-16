<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody\fpFileDeleteJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFpFileDeleteJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fpFileDeleteJobList
     */
    public $fpFileDeleteJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'           => 'RequestId',
        'fpFileDeleteJobList' => 'FpFileDeleteJobList',
        'nonExistIds'         => 'NonExistIds',
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
        if (null !== $this->fpFileDeleteJobList) {
            $res['FpFileDeleteJobList'] = null !== $this->fpFileDeleteJobList ? $this->fpFileDeleteJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFpFileDeleteJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FpFileDeleteJobList'])) {
            $model->fpFileDeleteJobList = fpFileDeleteJobList::fromMap($map['FpFileDeleteJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
