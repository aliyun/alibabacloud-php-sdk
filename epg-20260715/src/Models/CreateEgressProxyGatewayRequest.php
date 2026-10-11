<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayRequest\listenerProperties;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayRequest\tag;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayRequest\tlsInterceptProperties;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayRequest\zoneMappings;

class CreateEgressProxyGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $egressProxyConfigurationId;

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
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

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
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
        'egressProxyGatewayName' => 'EgressProxyGatewayName',
        'listenerProperties' => 'ListenerProperties',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'tlsInterceptProperties' => 'TlsInterceptProperties',
        'vpcId' => 'VpcId',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate()
    {
        if (\is_array($this->listenerProperties)) {
            Model::validateArray($this->listenerProperties);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressProxyConfigurationId) {
            $res['EgressProxyConfigurationId'] = $this->egressProxyConfigurationId;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressProxyConfigurationId'])) {
            $model->egressProxyConfigurationId = $map['EgressProxyConfigurationId'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
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
