<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagOnlineClientStatisticsResponseBody\sagStatistics;

class DescribeSagOnlineClientStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sagStatistics
     */
    public $sagStatistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'sagStatistics' => 'SagStatistics',
    ];

    public function validate()
    {
        if (null !== $this->sagStatistics) {
            $this->sagStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sagStatistics) {
            $res['SagStatistics'] = null !== $this->sagStatistics ? $this->sagStatistics->toArray($noStream) : $this->sagStatistics;
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

        if (isset($map['SagStatistics'])) {
            $model->sagStatistics = sagStatistics::fromMap($map['SagStatistics']);
        }

        return $model;
    }
}
