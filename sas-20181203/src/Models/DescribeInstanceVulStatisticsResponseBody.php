<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceVulStatisticsResponseBody\vulStat;
use AlibabaCloud\Tea\Model;

class DescribeInstanceVulStatisticsResponseBody extends Model
{
    /**
     * @example 1EE7B150-D67E-53FD-A52D-3E8E669A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var vulStat
     */
    public $vulStat;
    protected $_name = [
        'requestId' => 'RequestId',
        'vulStat'   => 'VulStat',
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
        if (null !== $this->vulStat) {
            $res['VulStat'] = null !== $this->vulStat ? $this->vulStat->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceVulStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulStat'])) {
            $model->vulStat = vulStat::fromMap($map['VulStat']);
        }

        return $model;
    }
}
