<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class ValidatePdnsUdpIpSegmentRequest extends Model
{
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $ipToken;
    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'ip'      => 'Ip',
        'ipToken' => 'IpToken',
        'lang'    => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipToken) {
            $res['IpToken'] = $this->ipToken;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpToken'])) {
            $model->ipToken = $map['IpToken'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
