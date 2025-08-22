<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class serviceDomainConfigs extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $propagatorTypes;

    /**
     * @var int
     */
    public $samplingRate;

    /**
     * @var bool
     */
    public $tracing;
    protected $_name = [
        'description' => 'Description',
        'domain' => 'Domain',
        'propagatorTypes' => 'PropagatorTypes',
        'samplingRate' => 'SamplingRate',
        'tracing' => 'Tracing',
    ];

    public function validate()
    {
        if (\is_array($this->propagatorTypes)) {
            Model::validateArray($this->propagatorTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->propagatorTypes) {
            if (\is_array($this->propagatorTypes)) {
                $res['PropagatorTypes'] = [];
                $n1 = 0;
                foreach ($this->propagatorTypes as $item1) {
                    $res['PropagatorTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }

        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['PropagatorTypes'])) {
            if (!empty($map['PropagatorTypes'])) {
                $model->propagatorTypes = [];
                $n1 = 0;
                foreach ($map['PropagatorTypes'] as $item1) {
                    $model->propagatorTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }

        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }

        return $model;
    }
}
