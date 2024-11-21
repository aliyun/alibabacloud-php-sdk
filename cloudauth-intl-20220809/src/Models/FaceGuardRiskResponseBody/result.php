<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceGuardRiskResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $riskExtends;

    /**
     * @example ROOT,VPN,HOOK
     *
     * @var string
     */
    public $riskTags;

    /**
     * @example hk573be80f944d95ac812e019e3655a8
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'riskExtends'   => 'RiskExtends',
        'riskTags'      => 'RiskTags',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
