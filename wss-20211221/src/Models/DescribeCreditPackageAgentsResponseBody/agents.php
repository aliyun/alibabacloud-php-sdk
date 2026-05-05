<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditPackageAgentsResponseBody;

use AlibabaCloud\Dara\Model;

class agents extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creditPackageId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $totalCredit;

    /**
     * @var int
     */
    public $usedCredit;

    /**
     * @var int
     */
    public $warnPercent;
    protected $_name = [
        'agentId' => 'AgentId',
        'createdTime' => 'CreatedTime',
        'creditPackageId' => 'CreditPackageId',
        'expiredTime' => 'ExpiredTime',
        'instanceType' => 'InstanceType',
        'totalCredit' => 'TotalCredit',
        'usedCredit' => 'UsedCredit',
        'warnPercent' => 'WarnPercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->creditPackageId) {
            $res['CreditPackageId'] = $this->creditPackageId;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->totalCredit) {
            $res['TotalCredit'] = $this->totalCredit;
        }

        if (null !== $this->usedCredit) {
            $res['UsedCredit'] = $this->usedCredit;
        }

        if (null !== $this->warnPercent) {
            $res['WarnPercent'] = $this->warnPercent;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['CreditPackageId'])) {
            $model->creditPackageId = $map['CreditPackageId'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['TotalCredit'])) {
            $model->totalCredit = $map['TotalCredit'];
        }

        if (isset($map['UsedCredit'])) {
            $model->usedCredit = $map['UsedCredit'];
        }

        if (isset($map['WarnPercent'])) {
            $model->warnPercent = $map['WarnPercent'];
        }

        return $model;
    }
}
