<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class UpdatePublicNetworkStatusRequest extends Model
{
    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var bool
     */
    public $publicNetworkEnabled;
    protected $_name = [
        'componentType' => 'ComponentType',
        'instanceId' => 'InstanceId',
        'nodeGroupId' => 'NodeGroupId',
        'publicNetworkEnabled' => 'PublicNetworkEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->publicNetworkEnabled) {
            $res['PublicNetworkEnabled'] = $this->publicNetworkEnabled;
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
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['PublicNetworkEnabled'])) {
            $model->publicNetworkEnabled = $map['PublicNetworkEnabled'];
        }

        return $model;
    }
}
