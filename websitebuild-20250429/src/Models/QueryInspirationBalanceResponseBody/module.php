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
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $totalUsed;
    protected $_name = [
        'remaining' => 'Remaining',
        'totalQuota' => 'TotalQuota',
        'totalUsed' => 'TotalUsed',
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

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->totalUsed) {
            $res['TotalUsed'] = $this->totalUsed;
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

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['TotalUsed'])) {
            $model->totalUsed = $map['TotalUsed'];
        }

        return $model;
    }
}
