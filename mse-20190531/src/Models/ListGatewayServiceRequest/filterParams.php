<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceRequest;

use AlibabaCloud\Tea\Model;

class filterParams extends Model
{
    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14centbrveca****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the service.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The protocol of the service.
     *
     *   HTTP
     *   HTTPS
     *   HTTP2
     *   GRPC
     *   DUBBO
     *
     * @example HTTP
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description The source type.
     *
     * @example MSE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'gatewayUniqueId' => 'GatewayUniqueId',
        'groupName'       => 'GroupName',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'serviceProtocol' => 'ServiceProtocol',
        'sourceType'      => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
