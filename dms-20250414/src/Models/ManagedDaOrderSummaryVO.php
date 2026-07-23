<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ManagedDaOrderSummaryVO extends Model
{
    /**
     * @var int
     */
    public $availableQuota;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $trialExpireTime;

    /**
     * @var bool
     */
    public $trialUsed;

    /**
     * @var int
     */
    public $usedQuota;

    /**
     * @var int
     */
    public $validOrderCount;
    protected $_name = [
        'availableQuota' => 'availableQuota',
        'totalQuota' => 'totalQuota',
        'trialExpireTime' => 'trialExpireTime',
        'trialUsed' => 'trialUsed',
        'usedQuota' => 'usedQuota',
        'validOrderCount' => 'validOrderCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableQuota) {
            $res['availableQuota'] = $this->availableQuota;
        }

        if (null !== $this->totalQuota) {
            $res['totalQuota'] = $this->totalQuota;
        }

        if (null !== $this->trialExpireTime) {
            $res['trialExpireTime'] = $this->trialExpireTime;
        }

        if (null !== $this->trialUsed) {
            $res['trialUsed'] = $this->trialUsed;
        }

        if (null !== $this->usedQuota) {
            $res['usedQuota'] = $this->usedQuota;
        }

        if (null !== $this->validOrderCount) {
            $res['validOrderCount'] = $this->validOrderCount;
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
        if (isset($map['availableQuota'])) {
            $model->availableQuota = $map['availableQuota'];
        }

        if (isset($map['totalQuota'])) {
            $model->totalQuota = $map['totalQuota'];
        }

        if (isset($map['trialExpireTime'])) {
            $model->trialExpireTime = $map['trialExpireTime'];
        }

        if (isset($map['trialUsed'])) {
            $model->trialUsed = $map['trialUsed'];
        }

        if (isset($map['usedQuota'])) {
            $model->usedQuota = $map['usedQuota'];
        }

        if (isset($map['validOrderCount'])) {
            $model->validOrderCount = $map['validOrderCount'];
        }

        return $model;
    }
}
