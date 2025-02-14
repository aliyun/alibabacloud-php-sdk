<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;

class vipConfigs extends Model
{
    /**
     * @var string[]
     */
    public $endpoints;
    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;
    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'endpoints' => 'endpoints',
        'match'     => 'match',
        'weight'    => 'weight',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1               = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1               = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
