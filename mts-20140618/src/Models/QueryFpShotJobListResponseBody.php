<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryFpShotJobListResponseBody extends Model
{
    /**
     * @var fpShotJobList
     */
    public $fpShotJobList;

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
        'nonExistIds'   => 'NonExistIds',
        'requestId'     => 'RequestId',
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
     * @return QueryFpShotJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpShotJobList'])) {
            $model->fpShotJobList = fpShotJobList::fromMap($map['FpShotJobList']);
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
