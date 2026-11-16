<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances;

use AlibabaCloud\Dara\Model;

class protocolPortConfigs extends Model
{
    /**
     * @var int[]
     */
    public $ports;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'ports' => 'Ports',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
