<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals;
use AlibabaCloud\Tea\Model;

class DescribePlayUserTotalResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
