<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet;

use AlibabaCloud\Dara\Model;

class privateIpSet extends Model
{
    /**
     * @var string[]
     */
    public $privateIpAddress;
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
        if (\is_array($this->privateIpAddress)) {
            Model::validateArray($this->privateIpAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            if (\is_array($this->privateIpAddress)) {
                $res['PrivateIpAddress'] = [];
                $n1                      = 0;
                foreach ($this->privateIpAddress as $item1) {
                    $res['PrivateIpAddress'][$n1++] = $item1;
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
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $n1                      = 0;
                foreach ($map['PrivateIpAddress'] as $item1) {
                    $model->privateIpAddress[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
