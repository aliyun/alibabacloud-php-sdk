<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody;

use AlibabaCloud\Dara\Model;

class property extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $mac;
    protected $_name = [
        'email' => 'Email',
        'hostname' => 'Hostname',
        'ip' => 'Ip',
        'mac' => 'Mac',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        return $model;
    }
}
