<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseCountStatisticsResponseBody\defenseCountStatistics;
use AlibabaCloud\Tea\Model;

class DescribeDefenseCountStatisticsResponseBody extends Model
{
    /**
     * @var defenseCountStatistics
     */
    public $defenseCountStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defenseCountStatistics' => 'DefenseCountStatistics',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseCountStatistics) {
            $res['DefenseCountStatistics'] = null !== $this->defenseCountStatistics ? $this->defenseCountStatistics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DefenseCountStatistics'])) {
            $model->defenseCountStatistics = defenseCountStatistics::fromMap($map['DefenseCountStatistics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
