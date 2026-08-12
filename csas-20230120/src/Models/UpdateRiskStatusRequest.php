<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateRiskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $riskConfirm;

    /**
     * @var string
     */
    public $riskConfirmDesc;

    /**
     * @var string
     */
    public $riskId;

    /**
     * @var string
     */
    public $riskScene;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'riskConfirm' => 'RiskConfirm',
        'riskConfirmDesc' => 'RiskConfirmDesc',
        'riskId' => 'RiskId',
        'riskScene' => 'RiskScene',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskConfirm) {
            $res['RiskConfirm'] = $this->riskConfirm;
        }

        if (null !== $this->riskConfirmDesc) {
            $res['RiskConfirmDesc'] = $this->riskConfirmDesc;
        }

        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->riskScene) {
            $res['RiskScene'] = $this->riskScene;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['RiskConfirm'])) {
            $model->riskConfirm = $map['RiskConfirm'];
        }

        if (isset($map['RiskConfirmDesc'])) {
            $model->riskConfirmDesc = $map['RiskConfirmDesc'];
        }

        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['RiskScene'])) {
            $model->riskScene = $map['RiskScene'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
