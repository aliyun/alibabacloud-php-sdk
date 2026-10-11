<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyGatewayAttributeRequest\addListenerProperties;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyGatewayAttributeRequest\removeListenerProperties;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyGatewayAttributeRequest\tlsInterceptProperties;

class UpdateEgressProxyGatewayAttributeRequest extends Model
{
    /**
     * @var addListenerProperties[]
     */
    public $addListenerProperties;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $defaultEgressProxyIpPoolId;

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
    public $egressProxyGatewayId;

    /**
     * @var string
     */
    public $egressProxyGatewayName;

    /**
     * @var removeListenerProperties[]
     */
    public $removeListenerProperties;

    /**
     * @var tlsInterceptProperties
     */
    public $tlsInterceptProperties;
    protected $_name = [
        'addListenerProperties' => 'AddListenerProperties',
        'clientToken' => 'ClientToken',
        'defaultEgressProxyIpPoolId' => 'DefaultEgressProxyIpPoolId',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'egressProxyGatewayId' => 'EgressProxyGatewayId',
        'egressProxyGatewayName' => 'EgressProxyGatewayName',
        'removeListenerProperties' => 'RemoveListenerProperties',
        'tlsInterceptProperties' => 'TlsInterceptProperties',
    ];

    public function validate()
    {
        if (\is_array($this->addListenerProperties)) {
            Model::validateArray($this->addListenerProperties);
        }
        if (\is_array($this->removeListenerProperties)) {
            Model::validateArray($this->removeListenerProperties);
        }
        if (null !== $this->tlsInterceptProperties) {
            $this->tlsInterceptProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addListenerProperties) {
            if (\is_array($this->addListenerProperties)) {
                $res['AddListenerProperties'] = [];
                $n1 = 0;
                foreach ($this->addListenerProperties as $item1) {
                    $res['AddListenerProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->defaultEgressProxyIpPoolId) {
            $res['DefaultEgressProxyIpPoolId'] = $this->defaultEgressProxyIpPoolId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressProxyGatewayId) {
            $res['EgressProxyGatewayId'] = $this->egressProxyGatewayId;
        }

        if (null !== $this->egressProxyGatewayName) {
            $res['EgressProxyGatewayName'] = $this->egressProxyGatewayName;
        }

        if (null !== $this->removeListenerProperties) {
            if (\is_array($this->removeListenerProperties)) {
                $res['RemoveListenerProperties'] = [];
                $n1 = 0;
                foreach ($this->removeListenerProperties as $item1) {
                    $res['RemoveListenerProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tlsInterceptProperties) {
            $res['TlsInterceptProperties'] = null !== $this->tlsInterceptProperties ? $this->tlsInterceptProperties->toArray($noStream) : $this->tlsInterceptProperties;
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
        if (isset($map['AddListenerProperties'])) {
            if (!empty($map['AddListenerProperties'])) {
                $model->addListenerProperties = [];
                $n1 = 0;
                foreach ($map['AddListenerProperties'] as $item1) {
                    $model->addListenerProperties[$n1] = addListenerProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DefaultEgressProxyIpPoolId'])) {
            $model->defaultEgressProxyIpPoolId = $map['DefaultEgressProxyIpPoolId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressProxyGatewayId'])) {
            $model->egressProxyGatewayId = $map['EgressProxyGatewayId'];
        }

        if (isset($map['EgressProxyGatewayName'])) {
            $model->egressProxyGatewayName = $map['EgressProxyGatewayName'];
        }

        if (isset($map['RemoveListenerProperties'])) {
            if (!empty($map['RemoveListenerProperties'])) {
                $model->removeListenerProperties = [];
                $n1 = 0;
                foreach ($map['RemoveListenerProperties'] as $item1) {
                    $model->removeListenerProperties[$n1] = removeListenerProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TlsInterceptProperties'])) {
            $model->tlsInterceptProperties = tlsInterceptProperties::fromMap($map['TlsInterceptProperties']);
        }

        return $model;
    }
}
