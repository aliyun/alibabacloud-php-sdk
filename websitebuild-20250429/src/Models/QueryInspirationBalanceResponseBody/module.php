<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryInspirationBalanceResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $remaining;

    /**
     * @var string
     */
    public $remainingStr;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $totalQuotaStr;

    /**
     * @var int
     */
    public $totalUsed;

    /**
     * @var string
     */
    public $totalUsedStr;
    protected $_name = [
        'remaining' => 'Remaining',
        'remainingStr' => 'RemainingStr',
        'totalQuota' => 'TotalQuota',
        'totalQuotaStr' => 'TotalQuotaStr',
        'totalUsed' => 'TotalUsed',
        'totalUsedStr' => 'TotalUsedStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remaining) {
            $res['Remaining'] = $this->remaining;
        }

        if (null !== $this->remainingStr) {
            $res['RemainingStr'] = $this->remainingStr;
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->totalQuotaStr) {
            $res['TotalQuotaStr'] = $this->totalQuotaStr;
        }

        if (null !== $this->totalUsed) {
            $res['TotalUsed'] = $this->totalUsed;
        }

        if (null !== $this->totalUsedStr) {
            $res['TotalUsedStr'] = $this->totalUsedStr;
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
        if (isset($map['Remaining'])) {
            $model->remaining = $map['Remaining'];
        }

        if (isset($map['RemainingStr'])) {
            $model->remainingStr = $map['RemainingStr'];
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['TotalQuotaStr'])) {
            $model->totalQuotaStr = $map['TotalQuotaStr'];
        }

        if (isset($map['TotalUsed'])) {
            $model->totalUsed = $map['TotalUsed'];
        }

        if (isset($map['TotalUsedStr'])) {
            $model->totalUsedStr = $map['TotalUsedStr'];
        }

        return $model;
    }
}
