<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo\baseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskRankInfoResponseBody\riskRankInfo\vulAsap;

class riskRankInfo extends Model
{
    /**
     * @var baseline[]
     */
    public $baseline;
    /**
     * @var vulAsap[]
     */
    public $vulAsap;
    protected $_name = [
        'baseline' => 'Baseline',
        'vulAsap'  => 'VulAsap',
    ];

    public function validate()
    {
        if (\is_array($this->baseline)) {
            Model::validateArray($this->baseline);
        }
        if (\is_array($this->vulAsap)) {
            Model::validateArray($this->vulAsap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseline) {
            if (\is_array($this->baseline)) {
                $res['Baseline'] = [];
                $n1              = 0;
                foreach ($this->baseline as $item1) {
                    $res['Baseline'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vulAsap) {
            if (\is_array($this->vulAsap)) {
                $res['VulAsap'] = [];
                $n1             = 0;
                foreach ($this->vulAsap as $item1) {
                    $res['VulAsap'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Baseline'])) {
            if (!empty($map['Baseline'])) {
                $model->baseline = [];
                $n1              = 0;
                foreach ($map['Baseline'] as $item1) {
                    $model->baseline[$n1++] = baseline::fromMap($item1);
                }
            }
        }

        if (isset($map['VulAsap'])) {
            if (!empty($map['VulAsap'])) {
                $model->vulAsap = [];
                $n1             = 0;
                foreach ($map['VulAsap'] as $item1) {
                    $model->vulAsap[$n1++] = vulAsap::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
