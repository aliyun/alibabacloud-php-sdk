<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetRiskListRequest extends Model
{
    /**
     * @description The IP addresses to query. Separate the IP addresses with commas (,). You can specify up to 20 IP addresses at a time.
     *
     * >
     *
     *   Example of an IPv4 address: 47.97.221.164
     *
     *   Example of an IPv6 address: 2001:db8:ffff:ffff:ffff:\\*\\*\\*\\*:ffff
     *
     * @var string[]
     */
    public $ipAddrList;

    /**
     * @description The IP version of the asset that is protected by Cloud Firewall.
     *
     * Valid values:
     *
     *   **4** (default): IPv4
     *   **6**: IPv6
     *
     * This parameter is required.
     * @example 4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source IP address of the request.
     *
     * @example 218.17.141.92
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'ipAddrList' => 'IpAddrList',
        'ipVersion'  => 'IpVersion',
        'lang'       => 'Lang',
        'sourceIp'   => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddrList) {
            $res['IpAddrList'] = $this->ipAddrList;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetRiskListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddrList'])) {
            if (!empty($map['IpAddrList'])) {
                $model->ipAddrList = $map['IpAddrList'];
            }
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
