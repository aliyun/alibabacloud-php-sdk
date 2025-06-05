<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Dara\Model;

class hostAliase extends Model
{
    /**
     * @var string[]
     */
    public $hostname;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'hostname' => 'Hostname',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        if (\is_array($this->hostname)) {
            Model::validateArray($this->hostname);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            if (\is_array($this->hostname)) {
                $res['Hostname'] = [];
                $n1 = 0;
                foreach ($this->hostname as $item1) {
                    $res['Hostname'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Hostname'])) {
            if (!empty($map['Hostname'])) {
                $model->hostname = [];
                $n1 = 0;
                foreach ($map['Hostname'] as $item1) {
                    $model->hostname[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
