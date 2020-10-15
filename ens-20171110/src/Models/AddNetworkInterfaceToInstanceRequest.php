<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AddNetworkInterfaceToInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networks;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'networks'   => 'Networks',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('networks', $this->networks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networks) {
            $res['Networks'] = $this->networks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddNetworkInterfaceToInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Networks'])) {
            $model->networks = $map['Networks'];
        }

        return $model;
    }
}
