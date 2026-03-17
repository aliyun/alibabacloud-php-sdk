<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsResponseBody\userStatistics;

class DescribeUserOnlineClientStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userStatistics
     */
    public $userStatistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'userStatistics' => 'UserStatistics',
    ];

    public function validate()
    {
        if (null !== $this->userStatistics) {
            $this->userStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userStatistics) {
            $res['UserStatistics'] = null !== $this->userStatistics ? $this->userStatistics->toArray($noStream) : $this->userStatistics;
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

        if (isset($map['UserStatistics'])) {
            $model->userStatistics = userStatistics::fromMap($map['UserStatistics']);
        }

        return $model;
    }
}
