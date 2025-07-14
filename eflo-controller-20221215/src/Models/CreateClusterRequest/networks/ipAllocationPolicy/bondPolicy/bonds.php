<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\bondPolicy;

use AlibabaCloud\Tea\Model;

class bonds extends Model
{
    /**
     * @description Bond name
     *
     * @example bond0
     *
     * @var string
     */
    public $name;

    /**
     * @description IP source subnet for the cluster
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $subnet;
    protected $_name = [
        'name' => 'Name',
        'subnet' => 'Subnet',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subnet) {
            $res['Subnet'] = $this->subnet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bonds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Subnet'])) {
            $model->subnet = $map['Subnet'];
        }

        return $model;
    }
}
