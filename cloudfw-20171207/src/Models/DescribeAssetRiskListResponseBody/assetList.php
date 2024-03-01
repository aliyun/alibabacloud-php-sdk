<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetRiskListResponseBody;

use AlibabaCloud\Tea\Model;

class assetList extends Model
{
    /**
     * @example 39.108.4.107
     *
     * @var string
     */
    public $ip;

    /**
     * @example 4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @example other
     *
     * @var string
     */
    public $reason;

    /**
     * @example low
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'ip'        => 'Ip',
        'ipVersion' => 'IpVersion',
        'reason'    => 'Reason',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
