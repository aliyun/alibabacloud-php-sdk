<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class PodNetworkInterface extends Model
{
    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'interfaceName' => 'InterfaceName',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interfaceName) {
            $res['InterfaceName'] = $this->interfaceName;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['InterfaceName'])) {
            $model->interfaceName = $map['InterfaceName'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
