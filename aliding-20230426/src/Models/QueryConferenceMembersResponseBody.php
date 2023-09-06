<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersResponseBody\memberModels;
use AlibabaCloud\Tea\Model;

class QueryConferenceMembersResponseBody extends Model
{
    /**
     * @var memberModels[]
     */
    public $memberModels;

    /**
     * @example 123000000
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'memberModels' => 'memberModels',
        'nextToken'    => 'nextToken',
        'requestId'    => 'requestId',
        'totalCount'   => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberModels) {
            $res['memberModels'] = [];
            if (null !== $this->memberModels && \is_array($this->memberModels)) {
                $n = 0;
                foreach ($this->memberModels as $item) {
                    $res['memberModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConferenceMembersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['memberModels'])) {
            if (!empty($map['memberModels'])) {
                $model->memberModels = [];
                $n                   = 0;
                foreach ($map['memberModels'] as $item) {
                    $model->memberModels[$n++] = null !== $item ? memberModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
