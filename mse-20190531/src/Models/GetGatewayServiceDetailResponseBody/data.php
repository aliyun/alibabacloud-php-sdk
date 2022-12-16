<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\labelDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\portTrafficPolicyList;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\versionDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\versions;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The traffic policy of the service.
     *
     * @example {}
     *
     * @var TrafficPolicy
     */
    public $gatewayTrafficPolicy;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-7ea3da97b96543e19f6c597c****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the service was added.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the service was last modified.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The name of the group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the service.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The IP addresses of the service.
     *
     * @var string[]
     */
    public $ips;

    /**
     * @description The details of tags.
     *
     * @var labelDetails[]
     */
    public $labelDetails;

    /**
     * @description The basic information about the service.
     *
     * @example {}
     *
     * @var string
     */
    public $metaInfo;

    /**
     * @description The name of the service.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @var portTrafficPolicyList[]
     */
    public $portTrafficPolicyList;

    /**
     * @var int[]
     */
    public $ports;

    /**
     * @description The name of the service registered with the service registry.
     *
     * @example test
     *
     * @var string
     */
    public $serviceNameInRegistry;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description The source ID of the service.
     *
     * @example 1
     *
     * @var int
     */
    public $sourceId;

    /**
     * @description The source type of the service.
     *
     * @example MSE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The details of versions.
     *
     * @var versionDetails[]
     */
    public $versionDetails;

    /**
     * @description The versions of the service.
     *
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'gatewayId'             => 'GatewayId',
        'gatewayTrafficPolicy'  => 'GatewayTrafficPolicy',
        'gatewayUniqueId'       => 'GatewayUniqueId',
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'groupName'             => 'GroupName',
        'healthCheck'           => 'HealthCheck',
        'healthStatus'          => 'HealthStatus',
        'id'                    => 'Id',
        'ips'                   => 'Ips',
        'labelDetails'          => 'LabelDetails',
        'metaInfo'              => 'MetaInfo',
        'name'                  => 'Name',
        'namespace'             => 'Namespace',
        'portTrafficPolicyList' => 'PortTrafficPolicyList',
        'ports'                 => 'Ports',
        'serviceNameInRegistry' => 'ServiceNameInRegistry',
        'serviceProtocol'       => 'ServiceProtocol',
        'sourceId'              => 'SourceId',
        'sourceType'            => 'SourceType',
        'versionDetails'        => 'VersionDetails',
        'versions'              => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayTrafficPolicy) {
            $res['GatewayTrafficPolicy'] = null !== $this->gatewayTrafficPolicy ? $this->gatewayTrafficPolicy->toMap() : null;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->labelDetails) {
            $res['LabelDetails'] = [];
            if (null !== $this->labelDetails && \is_array($this->labelDetails)) {
                $n = 0;
                foreach ($this->labelDetails as $item) {
                    $res['LabelDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->portTrafficPolicyList) {
            $res['PortTrafficPolicyList'] = [];
            if (null !== $this->portTrafficPolicyList && \is_array($this->portTrafficPolicyList)) {
                $n = 0;
                foreach ($this->portTrafficPolicyList as $item) {
                    $res['PortTrafficPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->serviceNameInRegistry) {
            $res['ServiceNameInRegistry'] = $this->serviceNameInRegistry;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->versionDetails) {
            $res['VersionDetails'] = [];
            if (null !== $this->versionDetails && \is_array($this->versionDetails)) {
                $n = 0;
                foreach ($this->versionDetails as $item) {
                    $res['VersionDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->versions) {
            $res['Versions'] = [];
            if (null !== $this->versions && \is_array($this->versions)) {
                $n = 0;
                foreach ($this->versions as $item) {
                    $res['Versions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayTrafficPolicy'])) {
            $model->gatewayTrafficPolicy = TrafficPolicy::fromMap($map['GatewayTrafficPolicy']);
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }
        if (isset($map['LabelDetails'])) {
            if (!empty($map['LabelDetails'])) {
                $model->labelDetails = [];
                $n                   = 0;
                foreach ($map['LabelDetails'] as $item) {
                    $model->labelDetails[$n++] = null !== $item ? labelDetails::fromMap($item) : $item;
                }
            }
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
        if (isset($map['PortTrafficPolicyList'])) {
            if (!empty($map['PortTrafficPolicyList'])) {
                $model->portTrafficPolicyList = [];
                $n                            = 0;
                foreach ($map['PortTrafficPolicyList'] as $item) {
                    $model->portTrafficPolicyList[$n++] = null !== $item ? portTrafficPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = $map['Ports'];
            }
        }
        if (isset($map['ServiceNameInRegistry'])) {
            $model->serviceNameInRegistry = $map['ServiceNameInRegistry'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['VersionDetails'])) {
            if (!empty($map['VersionDetails'])) {
                $model->versionDetails = [];
                $n                     = 0;
                foreach ($map['VersionDetails'] as $item) {
                    $model->versionDetails[$n++] = null !== $item ? versionDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n               = 0;
                foreach ($map['Versions'] as $item) {
                    $model->versions[$n++] = null !== $item ? versions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
