<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $datapoints;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datapoints' => 'Datapoints',
        'nextToken' => 'NextToken',
        'period' => 'Period',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
