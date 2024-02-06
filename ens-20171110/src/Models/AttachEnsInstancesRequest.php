<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AttachEnsInstancesRequest extends Model
{
    /**
     * @description The ID of the instance. You can specify only one instance ID.
     *
     * @example testInstacneId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The command that you want to execute on the instance. The command must be encoded in Base64 or UTF-8.
     *
     * @example wget d2dldCBodHRwOi8vYWxpYWNzLWs4cy1jbxxxx
     *
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
