<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals;

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
        'requestId' => 'RequestId',
        'userPlayStatisTotals' => 'UserPlayStatisTotals',
    ];

    public function validate()
    {
        if (null !== $this->userPlayStatisTotals) {
            $this->userPlayStatisTotals->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userPlayStatisTotals) {
            $res['UserPlayStatisTotals'] = null !== $this->userPlayStatisTotals ? $this->userPlayStatisTotals->toArray($noStream) : $this->userPlayStatisTotals;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
