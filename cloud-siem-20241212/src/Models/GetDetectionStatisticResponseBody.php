<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDetectionStatisticResponseBody\detectionStatistic;

class GetDetectionStatisticResponseBody extends Model
{
    /**
     * @var detectionStatistic
     */
    public $detectionStatistic;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectionStatistic' => 'DetectionStatistic',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->detectionStatistic) {
            $this->detectionStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectionStatistic) {
            $res['DetectionStatistic'] = null !== $this->detectionStatistic ? $this->detectionStatistic->toArray($noStream) : $this->detectionStatistic;
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
        if (isset($map['DetectionStatistic'])) {
            $model->detectionStatistic = detectionStatistic::fromMap($map['DetectionStatistic']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
