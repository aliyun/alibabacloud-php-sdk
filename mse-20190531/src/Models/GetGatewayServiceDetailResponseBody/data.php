<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\labelDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\portTrafficPolicyList;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\versionDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\versions;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy;

class data extends Model
{
    /**
     * @var string[]
     */
    public $dnsServerList;
    /**
     * @var int
     */
    public $gatewayId;
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
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
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
     * @var int
     */
    public $id;
    /**
     * @var string[]
     */
    public $ips;
    /**
     * @var labelDetails[]
     */
    public $labelDetails;
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
     * @var portTrafficPolicyList[]
     */
    public $portTrafficPolicyList;
    /**
     * @var int[]
     */
    public $ports;
    /**
     * @var string
     */
    public $serviceFQDN;
    /**
     * @var string
     */
    public $serviceNameInRegistry;
    /**
     * @var int
     */
    public $servicePort;
    /**
     * @var string
     */
    public $serviceProtocol;
    /**
     * @var int
     */
    public $sourceId;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var versionDetails[]
     */
    public $versionDetails;
    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'dnsServerList'         => 'DnsServerList',
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
        'serviceFQDN'           => 'ServiceFQDN',
        'serviceNameInRegistry' => 'ServiceNameInRegistry',
        'servicePort'           => 'ServicePort',
        'serviceProtocol'       => 'ServiceProtocol',
        'sourceId'              => 'SourceId',
        'sourceType'            => 'SourceType',
        'versionDetails'        => 'VersionDetails',
        'versions'              => 'Versions',
    ];

    public function validate()
    {
        if (\is_array($this->dnsServerList)) {
            Model::validateArray($this->dnsServerList);
        }
        if (null !== $this->gatewayTrafficPolicy) {
            $this->gatewayTrafficPolicy->validate();
        }
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        if (\is_array($this->labelDetails)) {
            Model::validateArray($this->labelDetails);
        }
        if (\is_array($this->portTrafficPolicyList)) {
            Model::validateArray($this->portTrafficPolicyList);
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->versionDetails)) {
            Model::validateArray($this->versionDetails);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsServerList) {
            if (\is_array($this->dnsServerList)) {
                $res['DnsServerList'] = [];
                $n1                   = 0;
                foreach ($this->dnsServerList as $item1) {
                    $res['DnsServerList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayTrafficPolicy) {
            $res['GatewayTrafficPolicy'] = null !== $this->gatewayTrafficPolicy ? $this->gatewayTrafficPolicy->toArray($noStream) : $this->gatewayTrafficPolicy;
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
            if (\is_array($this->ips)) {
                $res['Ips'] = [];
                $n1         = 0;
                foreach ($this->ips as $item1) {
                    $res['Ips'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->labelDetails) {
            if (\is_array($this->labelDetails)) {
                $res['LabelDetails'] = [];
                $n1                  = 0;
                foreach ($this->labelDetails as $item1) {
                    $res['LabelDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->portTrafficPolicyList)) {
                $res['PortTrafficPolicyList'] = [];
                $n1                           = 0;
                foreach ($this->portTrafficPolicyList as $item1) {
                    $res['PortTrafficPolicyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1           = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->serviceFQDN) {
            $res['ServiceFQDN'] = $this->serviceFQDN;
        }

        if (null !== $this->serviceNameInRegistry) {
            $res['ServiceNameInRegistry'] = $this->serviceNameInRegistry;
        }

        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
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
            if (\is_array($this->versionDetails)) {
                $res['VersionDetails'] = [];
                $n1                    = 0;
                foreach ($this->versionDetails as $item1) {
                    $res['VersionDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1              = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DnsServerList'])) {
            if (!empty($map['DnsServerList'])) {
                $model->dnsServerList = [];
                $n1                   = 0;
                foreach ($map['DnsServerList'] as $item1) {
                    $model->dnsServerList[$n1++] = $item1;
                }
            }
        }

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
                $model->ips = [];
                $n1         = 0;
                foreach ($map['Ips'] as $item1) {
                    $model->ips[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LabelDetails'])) {
            if (!empty($map['LabelDetails'])) {
                $model->labelDetails = [];
                $n1                  = 0;
                foreach ($map['LabelDetails'] as $item1) {
                    $model->labelDetails[$n1++] = labelDetails::fromMap($item1);
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
                $n1                           = 0;
                foreach ($map['PortTrafficPolicyList'] as $item1) {
                    $model->portTrafficPolicyList[$n1++] = portTrafficPolicyList::fromMap($item1);
                }
            }
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1           = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServiceFQDN'])) {
            $model->serviceFQDN = $map['ServiceFQDN'];
        }

        if (isset($map['ServiceNameInRegistry'])) {
            $model->serviceNameInRegistry = $map['ServiceNameInRegistry'];
        }

        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
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
                $n1                    = 0;
                foreach ($map['VersionDetails'] as $item1) {
                    $model->versionDetails[$n1++] = versionDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n1              = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1++] = versions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
