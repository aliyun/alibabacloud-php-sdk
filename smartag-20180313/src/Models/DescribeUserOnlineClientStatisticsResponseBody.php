<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsResponseBody\userStatistics;
use AlibabaCloud\Tea\Model;

class DescribeUserOnlineClientStatisticsResponseBody extends Model
{
    /**
     * @var userStatistics
     */
    public $userStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'userStatistics' => 'UserStatistics',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userStatistics) {
            $res['UserStatistics'] = null !== $this->userStatistics ? $this->userStatistics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserOnlineClientStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserStatistics'])) {
            $model->userStatistics = userStatistics::fromMap($map['UserStatistics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
