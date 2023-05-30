<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResolveRequest extends Model
{
    /**
     * @description The domain name whose DNS record you want to query.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The IP version of the asset that is protected by Cloud Firewall.
     *
     * Valid values:
     *
     *   **4**: IPv4 (default)
     *   **6**: IPv6
     *
     * @example 6
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The natural language of the response.
     *
     * Valid values:
     *
     *   **zh**: Chinese (default)
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
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'domain'    => 'Domain',
        'ipVersion' => 'IpVersion',
        'lang'      => 'Lang',
        'sourceIp'  => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
     * @return DescribeDomainResolveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
