<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo\baseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo\vulAsap;
use AlibabaCloud\Tea\Model;

class riskRankInfo extends Model
{
    /**
     * @description Baseline risk information.
     *
     * @var baseline[]
     */
    public $baseline;

    /**
     * @description High-risk vulnerability risk information.
     *
     * @var vulAsap[]
     */
    public $vulAsap;
    protected $_name = [
        'baseline' => 'Baseline',
        'vulAsap' => 'VulAsap',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = [];
            if (null !== $this->baseline && \is_array($this->baseline)) {
                $n = 0;
                foreach ($this->baseline as $item) {
                    $res['Baseline'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vulAsap) {
            $res['VulAsap'] = [];
            if (null !== $this->vulAsap && \is_array($this->vulAsap)) {
                $n = 0;
                foreach ($this->vulAsap as $item) {
                    $res['VulAsap'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskRankInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Baseline'])) {
            if (!empty($map['Baseline'])) {
                $model->baseline = [];
                $n = 0;
                foreach ($map['Baseline'] as $item) {
                    $model->baseline[$n++] = null !== $item ? baseline::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VulAsap'])) {
            if (!empty($map['VulAsap'])) {
                $model->vulAsap = [];
                $n = 0;
                foreach ($map['VulAsap'] as $item) {
                    $model->vulAsap[$n++] = null !== $item ? vulAsap::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
