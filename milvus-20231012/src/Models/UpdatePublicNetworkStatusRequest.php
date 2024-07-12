<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublicNetworkStatusRequest extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @description This parameter is required.
     *
     * @example Proxy
     *
     * @var string
     */
    public $componentType;

    /**
     * @description This parameter is required.
     *
     * @example c-123xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $publicNetworkEnabled;
    protected $_name = [
        'cidr'                 => 'Cidr',
        'componentType'        => 'ComponentType',
        'instanceId'           => 'InstanceId',
        'publicNetworkEnabled' => 'PublicNetworkEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->publicNetworkEnabled) {
            $res['PublicNetworkEnabled'] = $this->publicNetworkEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePublicNetworkStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PublicNetworkEnabled'])) {
            $model->publicNetworkEnabled = $map['PublicNetworkEnabled'];
        }

        return $model;
    }
}
