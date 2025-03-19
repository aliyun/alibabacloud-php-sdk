<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data;

use AlibabaCloud\Tea\Model;

class api extends Model
{
    /**
     * @description Number of published APIs.
     *
     * @example 1
     *
     * @var int
     */
    public $publishedCount;

    /**
     * @description Number of APIs.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'publishedCount' => 'publishedCount',
        'totalCount' => 'totalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishedCount) {
            $res['publishedCount'] = $this->publishedCount;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return api
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['publishedCount'])) {
            $model->publishedCount = $map['publishedCount'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
