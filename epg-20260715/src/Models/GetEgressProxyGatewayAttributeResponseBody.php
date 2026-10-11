<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyGatewayAttributeResponseBody\listenerProperties;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyGatewayAttributeResponseBody\tags;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyGatewayAttributeResponseBody\tlsInterceptProperties;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyGatewayAttributeResponseBody\zoneMappings;

class GetEgressProxyGatewayAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultEgressProxyIpPoolId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var string
     */
    public $egressProxyConfigurationId;

    /**
     * @var string
     */
    public $egressProxyGatewayId;

    /**
     * @var string
     */
    public $egressProxyGatewayName;

    /**
     * @var listenerProperties[]
     */
    public $listenerProperties;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var tlsInterceptProperties
     */
    public $tlsInterceptProperties;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultEgressProxyIpPoolId' => 'DefaultEgressProxyIpPoolId',
        'description' => 'Description',
        'dnsName' => 'DnsName',
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
        'egressProxyGatewayId' => 'EgressProxyGatewayId',
        'egressProxyGatewayName' => 'EgressProxyGatewayName',
        'listenerProperties' => 'ListenerProperties',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'tlsInterceptProperties' => 'TlsInterceptProperties',
        'vpcId' => 'VpcId',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate()
    {
        if (\is_array($this->listenerProperties)) {
            Model::validateArray($this->listenerProperties);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->tlsInterceptProperties) {
            $this->tlsInterceptProperties->validate();
        }
        if (\is_array($this->zoneMappings)) {
            Model::validateArray($this->zoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultEgressProxyIpPoolId) {
            $res['DefaultEgressProxyIpPoolId'] = $this->defaultEgressProxyIpPoolId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }

        if (null !== $this->egressProxyConfigurationId) {
            $res['EgressProxyConfigurationId'] = $this->egressProxyConfigurationId;
        }

        if (null !== $this->egressProxyGatewayId) {
            $res['EgressProxyGatewayId'] = $this->egressProxyGatewayId;
        }

        if (null !== $this->egressProxyGatewayName) {
            $res['EgressProxyGatewayName'] = $this->egressProxyGatewayName;
        }

        if (null !== $this->listenerProperties) {
            if (\is_array($this->listenerProperties)) {
                $res['ListenerProperties'] = [];
                $n1 = 0;
                foreach ($this->listenerProperties as $item1) {
                    $res['ListenerProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tlsInterceptProperties) {
            $res['TlsInterceptProperties'] = null !== $this->tlsInterceptProperties ? $this->tlsInterceptProperties->toArray($noStream) : $this->tlsInterceptProperties;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneMappings) {
            if (\is_array($this->zoneMappings)) {
                $res['ZoneMappings'] = [];
                $n1 = 0;
                foreach ($this->zoneMappings as $item1) {
                    $res['ZoneMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultEgressProxyIpPoolId'])) {
            $model->defaultEgressProxyIpPoolId = $map['DefaultEgressProxyIpPoolId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }

        if (isset($map['EgressProxyConfigurationId'])) {
            $model->egressProxyConfigurationId = $map['EgressProxyConfigurationId'];
        }

        if (isset($map['EgressProxyGatewayId'])) {
            $model->egressProxyGatewayId = $map['EgressProxyGatewayId'];
        }

        if (isset($map['EgressProxyGatewayName'])) {
            $model->egressProxyGatewayName = $map['EgressProxyGatewayName'];
        }

        if (isset($map['ListenerProperties'])) {
            if (!empty($map['ListenerProperties'])) {
                $model->listenerProperties = [];
                $n1 = 0;
                foreach ($map['ListenerProperties'] as $item1) {
                    $model->listenerProperties[$n1] = listenerProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TlsInterceptProperties'])) {
            $model->tlsInterceptProperties = tlsInterceptProperties::fromMap($map['TlsInterceptProperties']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n1 = 0;
                foreach ($map['ZoneMappings'] as $item1) {
                    $model->zoneMappings[$n1] = zoneMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
