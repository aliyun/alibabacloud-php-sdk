<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryCensorJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var censorJobList
     */
    public $censorJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'     => 'RequestId',
        'censorJobList' => 'CensorJobList',
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
        if (null !== $this->censorJobList) {
            $res['CensorJobList'] = null !== $this->censorJobList ? $this->censorJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CensorJobList'])) {
            $model->censorJobList = censorJobList::fromMap($map['CensorJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
