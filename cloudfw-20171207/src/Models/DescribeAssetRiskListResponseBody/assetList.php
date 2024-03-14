<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetRiskListResponseBody;

use AlibabaCloud\Tea\Model;

class assetList extends Model
{
    /**
     * @description The IP address of the server.
     *
     * @example 39.108.4.107
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP version of the asset that is protected by Cloud Firewall.
     *
     * Valid values:
     *
     *   **4**: IPv4
     *   **6**: IPv6
     *
     * @example 4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @description The reason for the risk.
     *
     * @example other
     *
     * @var string
     */
    public $reason;

    /**
     * @description The risk level. Valid values:
     *
     *   **low**
     *   **middle**
     *   **high**
     *
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
