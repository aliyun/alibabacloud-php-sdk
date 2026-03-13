<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Dara\Model;

class instanceTypeCandidateOptions extends Model
{
    /**
     * @var string[]
     */
    public $allowCidrBlocks;

    /**
     * @var bool
     */
    public $allowCrossAz;

    /**
     * @var bool
     */
    public $allowDifferentGeneration;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var float
     */
    public $maxPrice;
    protected $_name = [
        'allowCidrBlocks' => 'AllowCidrBlocks',
        'allowCrossAz' => 'AllowCrossAz',
        'allowDifferentGeneration' => 'AllowDifferentGeneration',
        'enabled' => 'Enabled',
        'maxPrice' => 'MaxPrice',
    ];

    public function validate()
    {
        if (\is_array($this->allowCidrBlocks)) {
            Model::validateArray($this->allowCidrBlocks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCidrBlocks) {
            if (\is_array($this->allowCidrBlocks)) {
                $res['AllowCidrBlocks'] = [];
                $n1 = 0;
                foreach ($this->allowCidrBlocks as $item1) {
                    $res['AllowCidrBlocks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowCrossAz) {
            $res['AllowCrossAz'] = $this->allowCrossAz;
        }

        if (null !== $this->allowDifferentGeneration) {
            $res['AllowDifferentGeneration'] = $this->allowDifferentGeneration;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
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
        if (isset($map['AllowCidrBlocks'])) {
            if (!empty($map['AllowCidrBlocks'])) {
                $model->allowCidrBlocks = [];
                $n1 = 0;
                foreach ($map['AllowCidrBlocks'] as $item1) {
                    $model->allowCidrBlocks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AllowCrossAz'])) {
            $model->allowCrossAz = $map['AllowCrossAz'];
        }

        if (isset($map['AllowDifferentGeneration'])) {
            $model->allowDifferentGeneration = $map['AllowDifferentGeneration'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }

        return $model;
    }
}
