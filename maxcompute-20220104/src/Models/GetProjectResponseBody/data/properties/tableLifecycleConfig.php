<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLongterm;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLowFrequency;

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
        if (null !== $this->tierToLongterm) {
            $this->tierToLongterm->validate();
        }
        if (null !== $this->tierToLowFrequency) {
            $this->tierToLowFrequency->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tierToLongterm) {
            $res['TierToLongterm'] = null !== $this->tierToLongterm ? $this->tierToLongterm->toArray($noStream) : $this->tierToLongterm;
        }

        if (null !== $this->tierToLowFrequency) {
            $res['TierToLowFrequency'] = null !== $this->tierToLowFrequency ? $this->tierToLowFrequency->toArray($noStream) : $this->tierToLowFrequency;
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
        if (isset($map['TierToLongterm'])) {
            $model->tierToLongterm = tierToLongterm::fromMap($map['TierToLongterm']);
        }

        if (isset($map['TierToLowFrequency'])) {
            $model->tierToLowFrequency = tierToLowFrequency::fromMap($map['TierToLowFrequency']);
        }

        return $model;
    }
}
