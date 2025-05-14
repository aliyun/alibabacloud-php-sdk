<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DeletePolicyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'instance_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
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
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }

        return $model;
    }
}
