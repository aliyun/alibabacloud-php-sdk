<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFpCompareJobListResponseBody extends Model
{
    /**
     * @var fpCompareJobList
     */
    public $fpCompareJobList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'fpCompareJobList' => 'FpCompareJobList',
        'requestId'        => 'RequestId',
        'nonExistIds'      => 'NonExistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpCompareJobList) {
            $res['FpCompareJobList'] = null !== $this->fpCompareJobList ? $this->fpCompareJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFpCompareJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpCompareJobList'])) {
            $model->fpCompareJobList = fpCompareJobList::fromMap($map['FpCompareJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
