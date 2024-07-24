<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponseBody\data\items\commonSetting\customHost;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description The destination domain name.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The IP version. Valid values:
     *
     *   0: A version is automatically selected.
     *   1: IPv4.
     *   2: IPv6.
     *
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @description The IP address.
     *
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'domain' => 'Domain',
        'ipType' => 'IpType',
        'ips'    => 'Ips',
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
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }

        return $model;
    }
}
