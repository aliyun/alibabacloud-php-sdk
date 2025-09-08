<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class HostAlias extends Model
{
    /**
     * @var string[]
     */
    public $hostnames;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'hostnames' => 'hostnames',
        'ip' => 'ip',
    ];

    public function validate()
    {
        if (\is_array($this->hostnames)) {
            Model::validateArray($this->hostnames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostnames) {
            if (\is_array($this->hostnames)) {
                $res['hostnames'] = [];
                $n1 = 0;
                foreach ($this->hostnames as $item1) {
                    $res['hostnames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
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
        if (isset($map['hostnames'])) {
            if (!empty($map['hostnames'])) {
                $model->hostnames = [];
                $n1 = 0;
                foreach ($map['hostnames'] as $item1) {
                    $model->hostnames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        return $model;
    }
}
