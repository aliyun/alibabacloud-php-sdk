<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceGuardRiskResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example ROOT,VPN,HOOK
     *
     * @var string
     */
    public $riakTags;

    /**
     * @example {
     * }
     * @var string
     */
    public $riskExtends;
    protected $_name = [
        'riakTags'    => 'RiakTags',
        'riskExtends' => 'RiskExtends',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riakTags) {
            $res['RiakTags'] = $this->riakTags;
        }
        if (null !== $this->riskExtends) {
            $res['RiskExtends'] = $this->riskExtends;
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
        if (isset($map['RiakTags'])) {
            $model->riakTags = $map['RiakTags'];
        }
        if (isset($map['RiskExtends'])) {
            $model->riskExtends = $map['RiskExtends'];
        }

        return $model;
    }
}
