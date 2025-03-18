<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostsResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description The address type of the host. Valid values:
     *
     *   **Public**
     *   **Private**
     *
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The remarks of the host.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The host ID.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The host name.
     *
     * @example host1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The private IP address of the host.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The public IP address of the host.
     *
     * @example 10.158.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description The host OS.
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
     * @description The host type. Valid values:
     *
     *   **Local**: on-premises host.
     *   **Ecs**: Elastic Compute Service (ECS) instance.
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The ECS instance ID.
     *
     * @example i-bp19ienyt0yax748****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The host status. Valid values:
     *
     *   **Normal**
     *   **Release**
     *
     * @example Normal
     *
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'activeAddressType' => 'ActiveAddressType',
        'comment' => 'Comment',
        'hostId' => 'HostId',
        'hostName' => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress' => 'HostPublicAddress',
        'OSType' => 'OSType',
        'source' => 'Source',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate() {}

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
