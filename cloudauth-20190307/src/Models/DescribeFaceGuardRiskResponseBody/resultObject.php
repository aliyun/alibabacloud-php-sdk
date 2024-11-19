<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceGuardRiskResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @example {
     * }
     * @var string
     */
    public $riskExtends;

    /**
     * @var string
     */
    public $riskTags;
    protected $_name = [
        'certifyId'   => 'CertifyId',
        'riskExtends' => 'RiskExtends',
        'riskTags'    => 'RiskTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->riskExtends) {
            $res['RiskExtends'] = $this->riskExtends;
        }
        if (null !== $this->riskTags) {
            $res['RiskTags'] = $this->riskTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['RiskExtends'])) {
            $model->riskExtends = $map['RiskExtends'];
        }
        if (isset($map['RiskTags'])) {
            $model->riskTags = $map['RiskTags'];
        }

        return $model;
    }
}
