<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetResponseRuleStatisticResponseBody\responseStatistic;

class GetResponseRuleStatisticResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var responseStatistic
     */
    public $responseStatistic;
    protected $_name = [
        'requestId' => 'RequestId',
        'responseStatistic' => 'ResponseStatistic',
    ];

    public function validate()
    {
        if (null !== $this->responseStatistic) {
            $this->responseStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->responseStatistic) {
            $res['ResponseStatistic'] = null !== $this->responseStatistic ? $this->responseStatistic->toArray($noStream) : $this->responseStatistic;
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

        if (isset($map['ResponseStatistic'])) {
            $model->responseStatistic = responseStatistic::fromMap($map['ResponseStatistic']);
        }

        return $model;
    }
}
