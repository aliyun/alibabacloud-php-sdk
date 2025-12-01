<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data;

use AlibabaCloud\Dara\Model;

class ecsProtection extends Model
{
    /**
     * @var int
     */
    public $noProtectionCount;

    /**
     * @var int
     */
    public $protectionCount;

    /**
     * @var string
     */
    public $protectionGrowthRate;

    /**
     * @var string
     */
    public $protectionRate;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'noProtectionCount' => 'NoProtectionCount',
        'protectionCount' => 'ProtectionCount',
        'protectionGrowthRate' => 'ProtectionGrowthRate',
        'protectionRate' => 'ProtectionRate',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
