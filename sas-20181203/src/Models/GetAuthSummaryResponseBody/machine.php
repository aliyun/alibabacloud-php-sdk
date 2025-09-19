<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class machine extends Model
{
    /**
     * @var int
     */
    public $bindCoreCount;

    /**
     * @var int
     */
    public $bindEcsCount;

    /**
     * @var int
     */
    public $postPaidBindCoreCount;

    /**
     * @var int
     */
    public $postPaidBindEcsCount;

    /**
     * @var int
     */
    public $riskCoreCount;

    /**
     * @var int
     */
    public $riskEcsCount;

    /**
     * @var int
     */
    public $totalCoreCount;

    /**
     * @var int
     */
    public $totalEcsCount;

    /**
     * @var int
     */
    public $unBindCoreCount;

    /**
     * @var int
     */
    public $unBindEcsCount;
    protected $_name = [
        'bindCoreCount' => 'BindCoreCount',
        'bindEcsCount' => 'BindEcsCount',
        'postPaidBindCoreCount' => 'PostPaidBindCoreCount',
        'postPaidBindEcsCount' => 'PostPaidBindEcsCount',
        'riskCoreCount' => 'RiskCoreCount',
        'riskEcsCount' => 'RiskEcsCount',
        'totalCoreCount' => 'TotalCoreCount',
        'totalEcsCount' => 'TotalEcsCount',
        'unBindCoreCount' => 'UnBindCoreCount',
        'unBindEcsCount' => 'UnBindEcsCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindCoreCount) {
            $res['BindCoreCount'] = $this->bindCoreCount;
        }

        if (null !== $this->bindEcsCount) {
            $res['BindEcsCount'] = $this->bindEcsCount;
        }

        if (null !== $this->postPaidBindCoreCount) {
            $res['PostPaidBindCoreCount'] = $this->postPaidBindCoreCount;
        }

        if (null !== $this->postPaidBindEcsCount) {
            $res['PostPaidBindEcsCount'] = $this->postPaidBindEcsCount;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindCoreCount'])) {
            $model->bindCoreCount = $map['BindCoreCount'];
        }

        if (isset($map['BindEcsCount'])) {
            $model->bindEcsCount = $map['BindEcsCount'];
        }

        if (isset($map['PostPaidBindCoreCount'])) {
            $model->postPaidBindCoreCount = $map['PostPaidBindCoreCount'];
        }

        if (isset($map['PostPaidBindEcsCount'])) {
            $model->postPaidBindEcsCount = $map['PostPaidBindEcsCount'];
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
