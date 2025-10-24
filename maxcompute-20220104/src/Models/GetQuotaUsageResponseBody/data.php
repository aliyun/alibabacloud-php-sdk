<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponseBody\data\plot;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $metrics;

    /**
     * @var plot[]
     */
    public $plot;
    protected $_name = [
        'metrics' => 'metrics',
        'plot' => 'plot',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->plot)) {
            Model::validateArray($this->plot);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                foreach ($this->metrics as $key1 => $value1) {
                    $res['metrics'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->plot) {
            if (\is_array($this->plot)) {
                $res['plot'] = [];
                $n1 = 0;
                foreach ($this->plot as $item1) {
                    $res['plot'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                foreach ($map['metrics'] as $key1 => $value1) {
                    $model->metrics[$key1] = $value1;
                }
            }
        }

        if (isset($map['plot'])) {
            if (!empty($map['plot'])) {
                $model->plot = [];
                $n1 = 0;
                foreach ($map['plot'] as $item1) {
                    $model->plot[$n1] = plot::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
