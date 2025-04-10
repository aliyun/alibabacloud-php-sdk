<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDefenseCountStatisticsResponseBody\defenseCountStatistics;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->defenseCountStatistics) {
            $this->defenseCountStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defenseCountStatistics) {
            $res['DefenseCountStatistics'] = null !== $this->defenseCountStatistics ? $this->defenseCountStatistics->toArray($noStream) : $this->defenseCountStatistics;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DefenseCountStatistics'])) {
            $model->defenseCountStatistics = defenseCountStatistics::fromMap($map['DefenseCountStatistics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
