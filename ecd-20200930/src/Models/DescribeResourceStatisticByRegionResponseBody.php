<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceStatisticByRegionResponseBody\statistic;

class DescribeResourceStatisticByRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statistic
     */
    public $statistic;
    protected $_name = [
        'requestId' => 'RequestId',
        'statistic' => 'Statistic',
    ];

    public function validate()
    {
        if (null !== $this->statistic) {
            $this->statistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statistic) {
            $res['Statistic'] = null !== $this->statistic ? $this->statistic->toArray($noStream) : $this->statistic;
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

        if (isset($map['Statistic'])) {
            $model->statistic = statistic::fromMap($map['Statistic']);
        }

        return $model;
    }
}
