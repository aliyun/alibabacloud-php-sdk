<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLongterm;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLowFrequency;
use AlibabaCloud\Tea\Model;

class tableLifecycleConfig extends Model
{
    /**
     * @var tierToLongterm
     */
    public $tierToLongterm;

    /**
     * @var tierToLowFrequency
     */
    public $tierToLowFrequency;
    protected $_name = [
        'tierToLongterm'     => 'TierToLongterm',
        'tierToLowFrequency' => 'TierToLowFrequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tierToLongterm) {
            $res['TierToLongterm'] = null !== $this->tierToLongterm ? $this->tierToLongterm->toMap() : null;
        }
        if (null !== $this->tierToLowFrequency) {
            $res['TierToLowFrequency'] = null !== $this->tierToLowFrequency ? $this->tierToLowFrequency->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableLifecycleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TierToLongterm'])) {
            $model->tierToLongterm = tierToLongterm::fromMap($map['TierToLongterm']);
        }
        if (isset($map['TierToLowFrequency'])) {
            $model->tierToLowFrequency = tierToLowFrequency::fromMap($map['TierToLowFrequency']);
        }

        return $model;
    }
}
