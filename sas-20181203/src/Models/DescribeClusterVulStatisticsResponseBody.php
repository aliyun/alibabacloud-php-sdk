<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterVulStatisticsResponseBody\vulStat;
use AlibabaCloud\Tea\Model;

class DescribeClusterVulStatisticsResponseBody extends Model
{
    /**
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF46038
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
     * @return DescribeClusterVulStatisticsResponseBody
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
