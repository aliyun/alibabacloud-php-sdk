<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class machine extends Model
{
    /**
     * @description The number of cores of the assets that are bound to Security Center.
     *
     * @example 10
     *
     * @var int
     */
    public $bindCoreCount;

    /**
     * @description The number of the assets that are bound to Security Center.
     *
     * @example 10
     *
     * @var int
     */
    public $bindEcsCount;

    /**
     * @description The number of cores of the assets that are at risk.
     *
     * @example 10
     *
     * @var int
     */
    public $riskCoreCount;

    /**
     * @description The number of the assets that are at risk.
     *
     * @example 10
     *
     * @var int
     */
    public $riskEcsCount;

    /**
     * @description The total number of asset cores.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCoreCount;

    /**
     * @description The total number of assets.
     *
     * @example 10
     *
     * @var int
     */
    public $totalEcsCount;

    /**
     * @description The number of cores of unbound assets.
     *
     * @example 10
     *
     * @var int
     */
    public $unBindCoreCount;

    /**
     * @description The number of unbound assets.
     *
     * @example 10
     *
     * @var int
     */
    public $unBindEcsCount;
    protected $_name = [
        'bindCoreCount'   => 'BindCoreCount',
        'bindEcsCount'    => 'BindEcsCount',
        'riskCoreCount'   => 'RiskCoreCount',
        'riskEcsCount'    => 'RiskEcsCount',
        'totalCoreCount'  => 'TotalCoreCount',
        'totalEcsCount'   => 'TotalEcsCount',
        'unBindCoreCount' => 'UnBindCoreCount',
        'unBindEcsCount'  => 'UnBindEcsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindCoreCount) {
            $res['BindCoreCount'] = $this->bindCoreCount;
        }
        if (null !== $this->bindEcsCount) {
            $res['BindEcsCount'] = $this->bindEcsCount;
        }
        if (null !== $this->riskCoreCount) {
            $res['RiskCoreCount'] = $this->riskCoreCount;
        }
        if (null !== $this->riskEcsCount) {
            $res['RiskEcsCount'] = $this->riskEcsCount;
        }
        if (null !== $this->totalCoreCount) {
            $res['TotalCoreCount'] = $this->totalCoreCount;
        }
        if (null !== $this->totalEcsCount) {
            $res['TotalEcsCount'] = $this->totalEcsCount;
        }
        if (null !== $this->unBindCoreCount) {
            $res['UnBindCoreCount'] = $this->unBindCoreCount;
        }
        if (null !== $this->unBindEcsCount) {
            $res['UnBindEcsCount'] = $this->unBindEcsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindCoreCount'])) {
            $model->bindCoreCount = $map['BindCoreCount'];
        }
        if (isset($map['BindEcsCount'])) {
            $model->bindEcsCount = $map['BindEcsCount'];
        }
        if (isset($map['RiskCoreCount'])) {
            $model->riskCoreCount = $map['RiskCoreCount'];
        }
        if (isset($map['RiskEcsCount'])) {
            $model->riskEcsCount = $map['RiskEcsCount'];
        }
        if (isset($map['TotalCoreCount'])) {
            $model->totalCoreCount = $map['TotalCoreCount'];
        }
        if (isset($map['TotalEcsCount'])) {
            $model->totalEcsCount = $map['TotalEcsCount'];
        }
        if (isset($map['UnBindCoreCount'])) {
            $model->unBindCoreCount = $map['UnBindCoreCount'];
        }
        if (isset($map['UnBindEcsCount'])) {
            $model->unBindEcsCount = $map['UnBindEcsCount'];
        }

        return $model;
    }
}
