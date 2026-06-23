<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AddGatewayQuotaRuleRequest extends Model
{
    /**
     * @var string
     */
    public $conflictHash;

    /**
     * @var string[]
     */
    public $consumerGroupIds;

    /**
     * @var string[]
     */
    public $consumerIds;

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
    public $periodMultiplier;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $quotaDimension;

    /**
     * @var int
     */
    public $quotaLimit;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $windowAlignment;
    protected $_name = [
        'conflictHash' => 'conflictHash',
        'consumerGroupIds' => 'consumerGroupIds',
        'consumerIds' => 'consumerIds',
        'dryRun' => 'dryRun',
        'overwrite' => 'overwrite',
        'periodMultiplier' => 'periodMultiplier',
        'periodType' => 'periodType',
        'quotaDimension' => 'quotaDimension',
        'quotaLimit' => 'quotaLimit',
        'ruleName' => 'ruleName',
        'timezone' => 'timezone',
        'windowAlignment' => 'windowAlignment',
    ];

    public function validate()
    {
        if (\is_array($this->consumerGroupIds)) {
            Model::validateArray($this->consumerGroupIds);
        }
        if (\is_array($this->consumerIds)) {
            Model::validateArray($this->consumerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->consumerIds) {
            if (\is_array($this->consumerIds)) {
                $res['consumerIds'] = [];
                $n1 = 0;
                foreach ($this->consumerIds as $item1) {
                    $res['consumerIds'][$n1] = $item1;
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

        if (null !== $this->periodMultiplier) {
            $res['periodMultiplier'] = $this->periodMultiplier;
        }

        if (null !== $this->periodType) {
            $res['periodType'] = $this->periodType;
        }

        if (null !== $this->quotaDimension) {
            $res['quotaDimension'] = $this->quotaDimension;
        }

        if (null !== $this->quotaLimit) {
            $res['quotaLimit'] = $this->quotaLimit;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->windowAlignment) {
            $res['windowAlignment'] = $this->windowAlignment;
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

        if (isset($map['consumerIds'])) {
            if (!empty($map['consumerIds'])) {
                $model->consumerIds = [];
                $n1 = 0;
                foreach ($map['consumerIds'] as $item1) {
                    $model->consumerIds[$n1] = $item1;
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

        if (isset($map['periodMultiplier'])) {
            $model->periodMultiplier = $map['periodMultiplier'];
        }

        if (isset($map['periodType'])) {
            $model->periodType = $map['periodType'];
        }

        if (isset($map['quotaDimension'])) {
            $model->quotaDimension = $map['quotaDimension'];
        }

        if (isset($map['quotaLimit'])) {
            $model->quotaLimit = $map['quotaLimit'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['windowAlignment'])) {
            $model->windowAlignment = $map['windowAlignment'];
        }

        return $model;
    }
}
