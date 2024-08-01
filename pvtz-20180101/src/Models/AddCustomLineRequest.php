<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddCustomLineRequest extends Model
{
    /**
     * @example INTRANET
     *
     * @var string
     */
    public $dnsCategory;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $ipv4s;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @example GLOBAL
     *
     * @var string
     */
    public $shareScope;
    protected $_name = [
        'dnsCategory' => 'DnsCategory',
        'ipv4s'       => 'Ipv4s',
        'lang'        => 'Lang',
        'name'        => 'Name',
        'shareScope'  => 'ShareScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsCategory) {
            $res['DnsCategory'] = $this->dnsCategory;
        }
        if (null !== $this->ipv4s) {
            $res['Ipv4s'] = $this->ipv4s;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->shareScope) {
            $res['ShareScope'] = $this->shareScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsCategory'])) {
            $model->dnsCategory = $map['DnsCategory'];
        }
        if (isset($map['Ipv4s'])) {
            if (!empty($map['Ipv4s'])) {
                $model->ipv4s = $map['Ipv4s'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShareScope'])) {
            $model->shareScope = $map['ShareScope'];
        }

        return $model;
    }
}
