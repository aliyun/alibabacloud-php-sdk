<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddrAttributeInfoRequest extends Model
{
    /**
     * @description The addresses.
     *
     * This parameter is required.
     * @example ["1.1.1.1"]
     *
     * @var string
     */
    public $addrs;

    /**
     * @description The language of the values for specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of addresses. Valid values:
     *
     *   IPV4: IPv4 address
     *   IPv6: IPv6 address
     *   DOMAIN: domain name
     *
     * This parameter is required.
     * @example ipv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'addrs' => 'Addrs',
        'lang'  => 'Lang',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrs) {
            $res['Addrs'] = $this->addrs;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAddrAttributeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addrs'])) {
            $model->addrs = $map['Addrs'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
