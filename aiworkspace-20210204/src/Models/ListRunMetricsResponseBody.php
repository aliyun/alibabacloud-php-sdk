<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListRunMetricsResponseBody extends Model
{
    /**
     * @var RunMetric[]
     */
    public $metrics;

    /**
     * @var int
     */
    public $nextPageToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metrics' => 'Metrics',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = RunMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
