<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersForGroupResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListUsersForGroupResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example NTxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'data' => 'data',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersForGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
