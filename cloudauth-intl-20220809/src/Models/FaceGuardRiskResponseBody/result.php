<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceGuardRiskResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $guardRiskScore;

    /**
     * @var string
     */
    public $riskExtends;

    /**
     * @var string
     */
    public $riskTags;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'guardRiskScore' => 'GuardRiskScore',
        'riskExtends' => 'RiskExtends',
        'riskTags' => 'RiskTags',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guardRiskScore) {
            $res['GuardRiskScore'] = $this->guardRiskScore;
        }

        if (null !== $this->riskExtends) {
            $res['RiskExtends'] = $this->riskExtends;
        }

        if (null !== $this->riskTags) {
            $res['RiskTags'] = $this->riskTags;
        }

        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
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
        if (isset($map['GuardRiskScore'])) {
            $model->guardRiskScore = $map['GuardRiskScore'];
        }

        if (isset($map['RiskExtends'])) {
            $model->riskExtends = $map['RiskExtends'];
        }

        if (isset($map['RiskTags'])) {
            $model->riskTags = $map['RiskTags'];
        }

        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
