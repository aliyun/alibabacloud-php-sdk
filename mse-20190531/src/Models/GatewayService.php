<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class GatewayService extends Model
{
    /**
     * @var TrafficPolicy
     */
    public $gatewayTrafficPolicy;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $metaInfo;
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
    public $sourceType;
    protected $_name = [
        'gatewayTrafficPolicy' => 'GatewayTrafficPolicy',
        'gatewayUniqueId'      => 'GatewayUniqueId',
        'groupName'            => 'GroupName',
        'id'                   => 'Id',
        'metaInfo'             => 'MetaInfo',
        'name'                 => 'Name',
        'namespace'            => 'Namespace',
        'sourceType'           => 'SourceType',
    ];

    public function validate()
    {
        if (null !== $this->gatewayTrafficPolicy) {
            $this->gatewayTrafficPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayTrafficPolicy) {
            $res['GatewayTrafficPolicy'] = null !== $this->gatewayTrafficPolicy ? $this->gatewayTrafficPolicy->toArray($noStream) : $this->gatewayTrafficPolicy;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['GatewayTrafficPolicy'])) {
            $model->gatewayTrafficPolicy = TrafficPolicy::fromMap($map['GatewayTrafficPolicy']);
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
