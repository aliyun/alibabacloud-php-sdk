<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyInstanceRequest extends Model
{
    /**
     * @example allowed-repos-mqdsf
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'instance_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }

        return $model;
    }
}
