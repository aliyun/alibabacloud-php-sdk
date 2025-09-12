<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration;

use AlibabaCloud\Dara\Model;

class hostAliases extends Model
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
        'hostnames' => 'Hostnames',
        'ip' => 'Ip',
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
                $res['Hostnames'] = [];
                $n1 = 0;
                foreach ($this->hostnames as $item1) {
                    $res['Hostnames'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = [];
                $n1 = 0;
                foreach ($map['Hostnames'] as $item1) {
                    $model->hostnames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
