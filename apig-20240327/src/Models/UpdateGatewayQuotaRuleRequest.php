<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayQuotaRuleRequest extends Model
{
    /**
     * @var string[]
     */
    public $addIds;

    /**
     * @var string
     */
    public $conflictHash;

    /**
     * @var string[]
     */
    public $consumerGroupIds;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var int
     */
    public $quotaLimit;

    /**
     * @var string[]
     */
    public $removeIds;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'addIds' => 'addIds',
        'conflictHash' => 'conflictHash',
        'consumerGroupIds' => 'consumerGroupIds',
        'dryRun' => 'dryRun',
        'overwrite' => 'overwrite',
        'quotaLimit' => 'quotaLimit',
        'removeIds' => 'removeIds',
        'ruleName' => 'ruleName',
    ];

    public function validate()
    {
        if (\is_array($this->addIds)) {
            Model::validateArray($this->addIds);
        }
        if (\is_array($this->consumerGroupIds)) {
            Model::validateArray($this->consumerGroupIds);
        }
        if (\is_array($this->removeIds)) {
            Model::validateArray($this->removeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addIds) {
            if (\is_array($this->addIds)) {
                $res['addIds'] = [];
                $n1 = 0;
                foreach ($this->addIds as $item1) {
                    $res['addIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->conflictHash) {
            $res['conflictHash'] = $this->conflictHash;
        }

        if (null !== $this->consumerGroupIds) {
            if (\is_array($this->consumerGroupIds)) {
                $res['consumerGroupIds'] = [];
                $n1 = 0;
                foreach ($this->consumerGroupIds as $item1) {
                    $res['consumerGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
        }

        if (null !== $this->quotaLimit) {
            $res['quotaLimit'] = $this->quotaLimit;
        }

        if (null !== $this->removeIds) {
            if (\is_array($this->removeIds)) {
                $res['removeIds'] = [];
                $n1 = 0;
                foreach ($this->removeIds as $item1) {
                    $res['removeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
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
        if (isset($map['addIds'])) {
            if (!empty($map['addIds'])) {
                $model->addIds = [];
                $n1 = 0;
                foreach ($map['addIds'] as $item1) {
                    $model->addIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['conflictHash'])) {
            $model->conflictHash = $map['conflictHash'];
        }

        if (isset($map['consumerGroupIds'])) {
            if (!empty($map['consumerGroupIds'])) {
                $model->consumerGroupIds = [];
                $n1 = 0;
                foreach ($map['consumerGroupIds'] as $item1) {
                    $model->consumerGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }

        if (isset($map['quotaLimit'])) {
            $model->quotaLimit = $map['quotaLimit'];
        }

        if (isset($map['removeIds'])) {
            if (!empty($map['removeIds'])) {
                $model->removeIds = [];
                $n1 = 0;
                foreach ($map['removeIds'] as $item1) {
                    $model->removeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        return $model;
    }
}
