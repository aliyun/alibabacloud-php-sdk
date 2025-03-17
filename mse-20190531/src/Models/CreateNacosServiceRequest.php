<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateNacosServiceRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the cluster.
     *
     * > This operation contains both the InstanceId and ClusterId parameters. You must specify one of them.
     *
     * @example mse-3691a080
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether the instance is marked as a temporary node. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example true
     *
     * @var bool
     */
    public $ephemeral;

    /**
     * @description The name of the group.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the instance.
     *
     * > This operation contains both the InstanceId and ClusterId parameters. You must specify one of them.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example production
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The protection threshold.
     *
     * @example 0
     *
     * @var string
     */
    public $protectThreshold;

    /**
     * @description The name of the service.
     *
     * This parameter is required.
     *
     * @example com.alibabacloud.hipstershop.cartserviceapi.service.CartService
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterId' => 'ClusterId',
        'ephemeral' => 'Ephemeral',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'namespaceId' => 'NamespaceId',
        'protectThreshold' => 'ProtectThreshold',
        'serviceName' => 'ServiceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->protectThreshold) {
            $res['ProtectThreshold'] = $this->protectThreshold;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNacosServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ProtectThreshold'])) {
            $model->protectThreshold = $map['ProtectThreshold'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
