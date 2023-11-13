<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeUnBlackholeCountResponseBody extends Model
{
    /**
     * @description The remaining quota that you can deactivate blackhole filtering.
     *
     * @example 5
     *
     * @var int
     */
    public $remainCount;

    /**
     * @description The ID of the request.
     *
     * @example 232929FA-40B6-4C53-9476-EE335ABA44CD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total quota that you can deactivate blackhole filtering.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'remainCount' => 'RemainCount',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainCount) {
            $res['RemainCount'] = $this->remainCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUnBlackholeCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemainCount'])) {
            $model->remainCount = $map['RemainCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
