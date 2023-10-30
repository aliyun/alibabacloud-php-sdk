<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host\protocols;
use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @description The public endpoint of the host. You can set this parameter to a domain name or an IP address.
     *
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The ID of the ECS instance or dedicated cluster host that was queried.
     *
     * >  No value is returned for this parameter if the **Source** parameter is set to **Local**.
     * @example host
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the Bastionhost instance where you want to query the host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example host
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The description of the host.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The status of the host. Valid values:
     *
     * - **Normal**: The host is normal.
     *
     * - **Release**: The host is released.
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

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
     * @description GetHost
     *
     * @var protocols[]
     */
    public $protocols;

    /**
     * @description The protocol information of the host.
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description Queries the details of a specified host, such as the name, source, endpoint, protocol, and service port of the host.
     *
     * @example i-bp19ienyt0yax748****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~315526~~).
     *
     * For more information about sample requests, see the "Examples" section of this topic.
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
