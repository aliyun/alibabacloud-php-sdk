<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host\protocols;
use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @description The address type of the host. Valid values:
     *
     *   **Public**: a public address
     *   **Private**: a private address
     *
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The description of the host.
     *
     * @example host
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the host.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The hostname.
     *
     * @example host
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The internal endpoint of the host. The value is a domain name or an IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The public address of the host. The value is a domain name or an IP address.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description The ID of the new network domain to which the host belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The operating system of the host. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The protocol information about the host.
     *
     * @var protocols[]
     */
    public $protocols;

    /**
     * @description The source of the host. Valid values:
     *
     *   **Local**: a host in a data center
     *   **Ecs**: an Elastic Compute Service (ECS) instance
     *   **Rds**: a host in an ApsaraDB MyBase dedicated cluster
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the ECS instance or the host in an ApsaraDB MyBase dedicated cluster.
     *
     * >  If **Local** is returned for the **Source** parameter, no value is returned for this parameter.
     * @example i-bp19ienyt0yax748****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The status of the host. Valid values:
     *
     *   **Normal**: normal
     *   **Release**: released
     *
     * @example Normal
     *
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'activeAddressType'   => 'ActiveAddressType',
        'comment'             => 'Comment',
        'hostId'              => 'HostId',
        'hostName'            => 'HostName',
        'hostPrivateAddress'  => 'HostPrivateAddress',
        'hostPublicAddress'   => 'HostPublicAddress',
        'networkDomainId'     => 'NetworkDomainId',
        'OSType'              => 'OSType',
        'protocols'           => 'Protocols',
        'source'              => 'Source',
        'sourceInstanceId'    => 'SourceInstanceId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostPrivateAddress) {
            $res['HostPrivateAddress'] = $this->hostPrivateAddress;
        }
        if (null !== $this->hostPublicAddress) {
            $res['HostPublicAddress'] = $this->hostPublicAddress;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = [];
            if (null !== $this->protocols && \is_array($this->protocols)) {
                $n = 0;
                foreach ($this->protocols as $item) {
                    $res['Protocols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceState) {
            $res['SourceInstanceState'] = $this->sourceInstanceState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return host
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostPrivateAddress'])) {
            $model->hostPrivateAddress = $map['HostPrivateAddress'];
        }
        if (isset($map['HostPublicAddress'])) {
            $model->hostPublicAddress = $map['HostPublicAddress'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n                = 0;
                foreach ($map['Protocols'] as $item) {
                    $model->protocols[$n++] = null !== $item ? protocols::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceState'])) {
            $model->sourceInstanceState = $map['SourceInstanceState'];
        }

        return $model;
    }
}
