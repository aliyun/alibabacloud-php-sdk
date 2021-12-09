<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList;
use AlibabaCloud\Tea\Model;

class QueryTerrorismJobListResponseBody extends Model
{
    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var terrorismJobList
     */
    public $terrorismJobList;
    protected $_name = [
        'nonExistIds'      => 'NonExistIds',
        'requestId'        => 'RequestId',
        'terrorismJobList' => 'TerrorismJobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terrorismJobList) {
            $res['TerrorismJobList'] = null !== $this->terrorismJobList ? $this->terrorismJobList->toMap() : null;
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
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TerrorismJobList'])) {
            $model->terrorismJobList = terrorismJobList::fromMap($map['TerrorismJobList']);
        }

        return $model;
    }
}
