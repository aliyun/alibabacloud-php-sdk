<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data;

use AlibabaCloud\Tea\Model;

class wafProtection extends Model
{
    /**
     * @description Number of unprotected items.
     *
     * @example 5
     *
     * @var int
     */
    public $noProtectionCount;

    /**
     * @description Number of protected items.
     *
     * @example 5
     *
     * @var int
     */
    public $protectionCount;

    /**
     * @description Year-over-year growth in protection rate.
     *
     * @example 35.00
     *
     * @var string
     */
    public $protectionGrowthRate;

    /**
     * @description Protection rate.
     *
     * @example 50.00
     *
     * @var string
     */
    public $protectionRate;

    /**
     * @description Total number of items.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'noProtectionCount'    => 'NoProtectionCount',
        'protectionCount'      => 'ProtectionCount',
        'protectionGrowthRate' => 'ProtectionGrowthRate',
        'protectionRate'       => 'ProtectionRate',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noProtectionCount) {
            $res['NoProtectionCount'] = $this->noProtectionCount;
        }
        if (null !== $this->protectionCount) {
            $res['ProtectionCount'] = $this->protectionCount;
        }
        if (null !== $this->protectionGrowthRate) {
            $res['ProtectionGrowthRate'] = $this->protectionGrowthRate;
        }
        if (null !== $this->protectionRate) {
            $res['ProtectionRate'] = $this->protectionRate;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wafProtection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoProtectionCount'])) {
            $model->noProtectionCount = $map['NoProtectionCount'];
        }
        if (isset($map['ProtectionCount'])) {
            $model->protectionCount = $map['ProtectionCount'];
        }
        if (isset($map['ProtectionGrowthRate'])) {
            $model->protectionGrowthRate = $map['ProtectionGrowthRate'];
        }
        if (isset($map['ProtectionRate'])) {
            $model->protectionRate = $map['ProtectionRate'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
