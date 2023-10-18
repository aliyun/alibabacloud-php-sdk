<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals;
use AlibabaCloud\Tea\Model;

class DescribePlayUserTotalResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1FAFB884-D5A7-47D1-****-8928AA9C8720
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The daily playback statistics.
     *
     * @var userPlayStatisTotals
     */
    public $userPlayStatisTotals;
    protected $_name = [
        'requestId'            => 'RequestId',
        'userPlayStatisTotals' => 'UserPlayStatisTotals',
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
        if (null !== $this->userPlayStatisTotals) {
            $res['UserPlayStatisTotals'] = null !== $this->userPlayStatisTotals ? $this->userPlayStatisTotals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayUserTotalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserPlayStatisTotals'])) {
            $model->userPlayStatisTotals = userPlayStatisTotals::fromMap($map['UserPlayStatisTotals']);
        }

        return $model;
    }
}
