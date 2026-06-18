<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeCacheReservePriceRequest extends Model
{
    /**
     * @var string
     */
    public $crRegion;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $quotaGb;
    protected $_name = [
        'crRegion' => 'CrRegion',
        'period' => 'Period',
        'quotaGb' => 'QuotaGb',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crRegion) {
            $res['CrRegion'] = $this->crRegion;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->quotaGb) {
            $res['QuotaGb'] = $this->quotaGb;
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
        if (isset($map['CrRegion'])) {
            $model->crRegion = $map['CrRegion'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['QuotaGb'])) {
            $model->quotaGb = $map['QuotaGb'];
        }

        return $model;
    }
}
