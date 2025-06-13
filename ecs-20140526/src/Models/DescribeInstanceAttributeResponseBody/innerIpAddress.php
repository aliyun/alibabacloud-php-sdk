<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class innerIpAddress extends Model
{
    /**
     * @var string[]
     */
    public $ipAddress;
    protected $_name = [
        'ipAddress' => 'IpAddress',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddress)) {
            Model::validateArray($this->ipAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipAddress) {
            if (\is_array($this->ipAddress)) {
                $res['IpAddress'] = [];
                $n1 = 0;
                foreach ($this->ipAddress as $item1) {
                    $res['IpAddress'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = [];
                $n1 = 0;
                foreach ($map['IpAddress'] as $item1) {
                    $model->ipAddress[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
