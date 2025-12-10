<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class PodIp extends Model
{
    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'interfaceName' => 'InterfaceName',
        'ip' => 'Ip',
        'type' => 'Type',
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

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
