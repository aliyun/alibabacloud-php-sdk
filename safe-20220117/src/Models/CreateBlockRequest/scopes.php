<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope;

class scopes extends Model
{
    /**
     * @var int[]
     */
    public $blockHarm;

    /**
     * @var blockScope
     */
    public $blockScope;

    /**
     * @var int[]
     */
    public $effectTime;

    /**
     * @var string
     */
    public $scopeRule;

    /**
     * @var string
     */
    public $changeObjectRegex;

    /**
     * @var int[]
     */
    public $riskLevels;
    protected $_name = [
        'blockHarm' => 'BlockHarm',
        'blockScope' => 'BlockScope',
        'effectTime' => 'EffectTime',
        'scopeRule' => 'ScopeRule',
        'changeObjectRegex' => 'changeObjectRegex',
        'riskLevels' => 'riskLevels',
    ];

    public function validate()
    {
        if (\is_array($this->blockHarm)) {
            Model::validateArray($this->blockHarm);
        }
        if (null !== $this->blockScope) {
            $this->blockScope->validate();
        }
        if (\is_array($this->effectTime)) {
            Model::validateArray($this->effectTime);
        }
        if (\is_array($this->riskLevels)) {
            Model::validateArray($this->riskLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockHarm) {
            if (\is_array($this->blockHarm)) {
                $res['BlockHarm'] = [];
                $n1 = 0;
                foreach ($this->blockHarm as $item1) {
                    $res['BlockHarm'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blockScope) {
            $res['BlockScope'] = null !== $this->blockScope ? $this->blockScope->toArray($noStream) : $this->blockScope;
        }

        if (null !== $this->effectTime) {
            if (\is_array($this->effectTime)) {
                $res['EffectTime'] = [];
                $n1 = 0;
                foreach ($this->effectTime as $item1) {
                    $res['EffectTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scopeRule) {
            $res['ScopeRule'] = $this->scopeRule;
        }

        if (null !== $this->changeObjectRegex) {
            $res['changeObjectRegex'] = $this->changeObjectRegex;
        }

        if (null !== $this->riskLevels) {
            if (\is_array($this->riskLevels)) {
                $res['riskLevels'] = [];
                $n1 = 0;
                foreach ($this->riskLevels as $item1) {
                    $res['riskLevels'][$n1] = $item1;
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
        if (isset($map['BlockHarm'])) {
            if (!empty($map['BlockHarm'])) {
                $model->blockHarm = [];
                $n1 = 0;
                foreach ($map['BlockHarm'] as $item1) {
                    $model->blockHarm[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BlockScope'])) {
            $model->blockScope = blockScope::fromMap($map['BlockScope']);
        }

        if (isset($map['EffectTime'])) {
            if (!empty($map['EffectTime'])) {
                $model->effectTime = [];
                $n1 = 0;
                foreach ($map['EffectTime'] as $item1) {
                    $model->effectTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScopeRule'])) {
            $model->scopeRule = $map['ScopeRule'];
        }

        if (isset($map['changeObjectRegex'])) {
            $model->changeObjectRegex = $map['changeObjectRegex'];
        }

        if (isset($map['riskLevels'])) {
            if (!empty($map['riskLevels'])) {
                $model->riskLevels = [];
                $n1 = 0;
                foreach ($map['riskLevels'] as $item1) {
                    $model->riskLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
