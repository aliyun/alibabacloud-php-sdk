<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DataAgentBillingInstance extends Model
{
    /**
     * @var int
     */
    public $agentSeats;

    /**
     * @var string
     */
    public $billingInstanceId;

    /**
     * @var string[]
     */
    public $boundWorkspaceIds;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $freeAgentSeats;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $LLM;

    /**
     * @var string
     */
    public $payLevel;

    /**
     * @var int
     */
    public $sessionAvailableDurationQuota;

    /**
     * @var int
     */
    public $sessionSeats;

    /**
     * @var int
     */
    public $tokenLimit;
    protected $_name = [
        'agentSeats' => 'AgentSeats',
        'billingInstanceId' => 'BillingInstanceId',
        'boundWorkspaceIds' => 'BoundWorkspaceIds',
        'chargeType' => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'expireTime' => 'ExpireTime',
        'freeAgentSeats' => 'FreeAgentSeats',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'isDefault' => 'IsDefault',
        'LLM' => 'LLM',
        'payLevel' => 'PayLevel',
        'sessionAvailableDurationQuota' => 'SessionAvailableDurationQuota',
        'sessionSeats' => 'SessionSeats',
        'tokenLimit' => 'TokenLimit',
    ];

    public function validate()
    {
        if (\is_array($this->boundWorkspaceIds)) {
            Model::validateArray($this->boundWorkspaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSeats) {
            $res['AgentSeats'] = $this->agentSeats;
        }

        if (null !== $this->billingInstanceId) {
            $res['BillingInstanceId'] = $this->billingInstanceId;
        }

        if (null !== $this->boundWorkspaceIds) {
            if (\is_array($this->boundWorkspaceIds)) {
                $res['BoundWorkspaceIds'] = [];
                $n1 = 0;
                foreach ($this->boundWorkspaceIds as $item1) {
                    $res['BoundWorkspaceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->freeAgentSeats) {
            $res['FreeAgentSeats'] = $this->freeAgentSeats;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->LLM) {
            $res['LLM'] = $this->LLM;
        }

        if (null !== $this->payLevel) {
            $res['PayLevel'] = $this->payLevel;
        }

        if (null !== $this->sessionAvailableDurationQuota) {
            $res['SessionAvailableDurationQuota'] = $this->sessionAvailableDurationQuota;
        }

        if (null !== $this->sessionSeats) {
            $res['SessionSeats'] = $this->sessionSeats;
        }

        if (null !== $this->tokenLimit) {
            $res['TokenLimit'] = $this->tokenLimit;
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
        if (isset($map['AgentSeats'])) {
            $model->agentSeats = $map['AgentSeats'];
        }

        if (isset($map['BillingInstanceId'])) {
            $model->billingInstanceId = $map['BillingInstanceId'];
        }

        if (isset($map['BoundWorkspaceIds'])) {
            if (!empty($map['BoundWorkspaceIds'])) {
                $model->boundWorkspaceIds = [];
                $n1 = 0;
                foreach ($map['BoundWorkspaceIds'] as $item1) {
                    $model->boundWorkspaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['FreeAgentSeats'])) {
            $model->freeAgentSeats = $map['FreeAgentSeats'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['LLM'])) {
            $model->LLM = $map['LLM'];
        }

        if (isset($map['PayLevel'])) {
            $model->payLevel = $map['PayLevel'];
        }

        if (isset($map['SessionAvailableDurationQuota'])) {
            $model->sessionAvailableDurationQuota = $map['SessionAvailableDurationQuota'];
        }

        if (isset($map['SessionSeats'])) {
            $model->sessionSeats = $map['SessionSeats'];
        }

        if (isset($map['TokenLimit'])) {
            $model->tokenLimit = $map['TokenLimit'];
        }

        return $model;
    }
}
