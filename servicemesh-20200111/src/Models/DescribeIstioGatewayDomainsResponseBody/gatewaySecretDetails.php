<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayDomainsResponseBody;

use AlibabaCloud\Dara\Model;

class gatewaySecretDetails extends Model
{
    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var string
     */
    public $gatewayCRName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'credentialName' => 'CredentialName',
        'detail' => 'Detail',
        'domains' => 'Domains',
        'gatewayCRName' => 'GatewayCRName',
        'namespace' => 'Namespace',
        'portName' => 'PortName',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialName) {
            $res['CredentialName'] = $this->credentialName;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gatewayCRName) {
            $res['GatewayCRName'] = $this->gatewayCRName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['CredentialName'])) {
            $model->credentialName = $map['CredentialName'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GatewayCRName'])) {
            $model->gatewayCRName = $map['GatewayCRName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
