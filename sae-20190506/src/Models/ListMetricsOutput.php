<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListMetricsOutput extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var MetricInfo[][]
     */
    public $metrics;
    protected $_name = [
        'requestId' => 'RequestId',
        'metrics' => 'metrics',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                foreach ($this->metrics as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['metrics'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['metrics'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
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

        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                foreach ($map['metrics'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->metrics[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->metrics[$key1][$n2++] = MetricInfo::fromMap($item2);
                        }
                    }
                }
            }
        }

        return $model;
    }
}
