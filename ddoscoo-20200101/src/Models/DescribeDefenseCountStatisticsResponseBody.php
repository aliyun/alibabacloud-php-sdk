<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsResponseBody\defenseCountStatistics;
use AlibabaCloud\Tea\Model;

class DescribeDefenseCountStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var defenseCountStatistics
     */
    public $defenseCountStatistics;
    protected $_name = [
        'requestId'              => 'RequestId',
        'defenseCountStatistics' => 'DefenseCountStatistics',
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
        if (null !== $this->defenseCountStatistics) {
            $res['DefenseCountStatistics'] = null !== $this->defenseCountStatistics ? $this->defenseCountStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefenseCountStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DefenseCountStatistics'])) {
            $model->defenseCountStatistics = defenseCountStatistics::fromMap($map['DefenseCountStatistics']);
        }

        return $model;
    }
}
