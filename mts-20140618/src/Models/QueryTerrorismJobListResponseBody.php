<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList;
use AlibabaCloud\Tea\Model;

class QueryTerrorismJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var terrorismJobList
     */
    public $terrorismJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'        => 'RequestId',
        'terrorismJobList' => 'TerrorismJobList',
        'nonExistIds'      => 'NonExistIds',
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
        if (null !== $this->terrorismJobList) {
            $res['TerrorismJobList'] = null !== $this->terrorismJobList ? $this->terrorismJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTerrorismJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TerrorismJobList'])) {
            $model->terrorismJobList = terrorismJobList::fromMap($map['TerrorismJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
