<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
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
     * @description The number of host accounts.
     *
     * @example 1
     *
     * @var int
     */
    public $hostAccountCount;

    /**
     * @description The ID of the host.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The name of the host.
     *
     * @example name
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The private address of the host. The value is a domain name or an IP address.
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
     * @description The source of the host. Valid values:
     *
     *   **Local**: a host in a data center
     *   **Ecs**: an ECS instance
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
     * > No value is returned for this parameter if the **Source** parameter is set to **Local**.
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
        'hostAccountCount'    => 'HostAccountCount',
        'hostId'              => 'HostId',
        'hostName'            => 'HostName',
        'hostPrivateAddress'  => 'HostPrivateAddress',
        'hostPublicAddress'   => 'HostPublicAddress',
        'OSType'              => 'OSType',
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
        if (null !== $this->hostAccountCount) {
            $res['HostAccountCount'] = $this->hostAccountCount;
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
     * @return hosts
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
        if (isset($map['HostAccountCount'])) {
            $model->hostAccountCount = $map['HostAccountCount'];
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
