<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterSuspEventStatisticsResponseBody\suspStatistics;

class GetClusterSuspEventStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var suspStatistics
     */
    public $suspStatistics;
    protected $_name = [
        'requestId'      => 'RequestId',
        'suspStatistics' => 'SuspStatistics',
    ];

    public function validate()
    {
        if (null !== $this->suspStatistics) {
            $this->suspStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suspStatistics) {
            $res['SuspStatistics'] = null !== $this->suspStatistics ? $this->suspStatistics->toArray($noStream) : $this->suspStatistics;
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

        if (isset($map['SuspStatistics'])) {
            $model->suspStatistics = suspStatistics::fromMap($map['SuspStatistics']);
        }

        return $model;
    }
}
