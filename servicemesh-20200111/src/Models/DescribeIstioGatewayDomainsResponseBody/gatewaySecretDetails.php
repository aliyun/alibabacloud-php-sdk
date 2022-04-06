<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayDomainsResponseBody;

use AlibabaCloud\Tea\Model;

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
        'detail'         => 'Detail',
        'domains'        => 'Domains',
        'namespace'      => 'Namespace',
        'portName'       => 'PortName',
        'protocol'       => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialName) {
            $res['CredentialName'] = $this->credentialName;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
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

    /**
     * @param array $map
     *
     * @return gatewaySecretDetails
     */
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
                $model->domains = $map['Domains'];
            }
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
