<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class BatchDescribeCdnIpInfoRequest extends Model
{
    /**
     * @description The list of IP addresses to query. Separate IP addresses with commas (,). You can specify up to 20 IP addresses at a time.
     *
     * > *   Example of an IPv4 address: 192.0.2.1
     * >*   Example of an IPv6 address: 2001:db8:ffff:ffff:ffff:\\*\\*\\*\\*:ffff.
     *
     * This parameter is required.
     * @example 111.XXX.XXX.230,47.XXX.XXX.243
     *
     * @var string
     */
    public $ipAddrList;

    /**
     * @description The language of the query results. Valid values:
     *
     *   **zh** (default): Simplified Chinese.
     *   **en**: English.
     *
     * @example en
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'ipAddrList' => 'IpAddrList',
        'language'   => 'Language',
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
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDescribeCdnIpInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddrList'])) {
            $model->ipAddrList = $map['IpAddrList'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
