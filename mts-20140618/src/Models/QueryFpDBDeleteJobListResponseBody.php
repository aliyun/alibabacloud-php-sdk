<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListResponseBody\fpDBDeleteJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFpDBDeleteJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fpDBDeleteJobList
     */
    public $fpDBDeleteJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'         => 'RequestId',
        'fpDBDeleteJobList' => 'FpDBDeleteJobList',
        'nonExistIds'       => 'NonExistIds',
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
        if (null !== $this->fpDBDeleteJobList) {
            $res['FpDBDeleteJobList'] = null !== $this->fpDBDeleteJobList ? $this->fpDBDeleteJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFpDBDeleteJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FpDBDeleteJobList'])) {
            $model->fpDBDeleteJobList = fpDBDeleteJobList::fromMap($map['FpDBDeleteJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
