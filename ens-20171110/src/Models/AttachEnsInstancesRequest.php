<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AttachEnsInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scripts;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scripts'    => 'Scripts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scripts) {
            $res['Scripts'] = $this->scripts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachEnsInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Scripts'])) {
            $model->scripts = $map['Scripts'];
        }

        return $model;
    }
}
