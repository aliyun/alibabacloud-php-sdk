<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesResponseBody;

use AlibabaCloud\Dara\Model;

class assignedPrivateIpAddressesSet extends Model
{
    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string[]
     */
    public $privateIpSet;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpSet' => 'PrivateIpSet',
    ];

    public function validate()
    {
        if (\is_array($this->privateIpSet)) {
            Model::validateArray($this->privateIpSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->privateIpSet) {
            if (\is_array($this->privateIpSet)) {
                $res['PrivateIpSet'] = [];
                $n1 = 0;
                foreach ($this->privateIpSet as $item1) {
                    $res['PrivateIpSet'][$n1] = $item1;
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
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['PrivateIpSet'])) {
            if (!empty($map['PrivateIpSet'])) {
                $model->privateIpSet = [];
                $n1 = 0;
                foreach ($map['PrivateIpSet'] as $item1) {
                    $model->privateIpSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
