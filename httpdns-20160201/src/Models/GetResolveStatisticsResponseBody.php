<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveStatisticsResponseBody\dataPoints;

class GetResolveStatisticsResponseBody extends Model
{
    /**
     * @var dataPoints
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataPoints) {
            $this->dataPoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPoints) {
            $res['DataPoints'] = null !== $this->dataPoints ? $this->dataPoints->toArray($noStream) : $this->dataPoints;
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
        if (isset($map['DataPoints'])) {
            $model->dataPoints = dataPoints::fromMap($map['DataPoints']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
