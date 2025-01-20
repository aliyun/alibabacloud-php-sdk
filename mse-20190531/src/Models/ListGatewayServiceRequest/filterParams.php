<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceRequest;

use AlibabaCloud\Dara\Model;

class filterParams extends Model
{
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $serviceProtocol;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
