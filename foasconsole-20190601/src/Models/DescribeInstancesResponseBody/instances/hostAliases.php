<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class hostAliases extends Model
{
    /**
     * @var string[]
     */
    public $hostNames;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'hostNames' => 'HostNames',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        if (\is_array($this->hostNames)) {
            Model::validateArray($this->hostNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostNames) {
            if (\is_array($this->hostNames)) {
                $res['HostNames'] = [];
                $n1 = 0;
                foreach ($this->hostNames as $item1) {
                    $res['HostNames'][$n1] = $item1;
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
        if (isset($map['HostNames'])) {
            if (!empty($map['HostNames'])) {
                $model->hostNames = [];
                $n1 = 0;
                foreach ($map['HostNames'] as $item1) {
                    $model->hostNames[$n1] = $item1;
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
