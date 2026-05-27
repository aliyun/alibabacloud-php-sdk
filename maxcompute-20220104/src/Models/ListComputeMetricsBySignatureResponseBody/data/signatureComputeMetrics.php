<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsBySignatureResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeMetricsBySignatureResponseBody\data\signatureComputeMetrics\instances;

class signatureComputeMetrics extends Model
{
    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string[]
     */
    public $projectNames;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var float
     */
    public $usage;
    protected $_name = [
        'instances' => 'instances',
        'projectNames' => 'projectNames',
        'signature' => 'signature',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->projectNames)) {
            Model::validateArray($this->projectNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectNames) {
            if (\is_array($this->projectNames)) {
                $res['projectNames'] = [];
                $n1 = 0;
                foreach ($this->projectNames as $item1) {
                    $res['projectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1] = instances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['projectNames'])) {
            if (!empty($map['projectNames'])) {
                $model->projectNames = [];
                $n1 = 0;
                foreach ($map['projectNames'] as $item1) {
                    $model->projectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
