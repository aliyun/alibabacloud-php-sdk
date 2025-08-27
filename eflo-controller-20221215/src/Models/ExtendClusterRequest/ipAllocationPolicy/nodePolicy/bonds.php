<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\nodePolicy;

use AlibabaCloud\Dara\Model;

class bonds extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $subnet;
    protected $_name = [
        'name' => 'Name',
        'subnet' => 'Subnet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
