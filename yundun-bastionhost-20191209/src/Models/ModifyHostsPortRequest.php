<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyHostsPortRequest extends Model
{
    /**
     * @description The ID of the host for which you want to change the port. The value is a JSON string. You can add up to 100 host IDs. If you specify multiple IDs, separate the IDs with commas (,).
     *
     * This parameter is required.
     * @example ["1","2","3"]
     *
     * @var string
     */
    public $hostIds;

    /**
     * @description The ID of the bastion host for which you want to change the port of the host.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new port of the host. The port number must be an integer. Valid values: 22 to 65535.
     *
     * This parameter is required.
     * @example 22
     *
     * @var string
     */
    public $port;

    /**
     * @description The protocol that is used to connect to the host. Valid values:
     *
     *   **SSH**
     *   **RDP**
     *
     * This parameter is required.
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description The region ID of the bastion host for which you want to change the port of the host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostIds'      => 'HostIds',
        'instanceId'   => 'InstanceId',
        'port'         => 'Port',
        'protocolName' => 'ProtocolName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostIds) {
            $res['HostIds'] = $this->hostIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHostsPortRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostIds'])) {
            $model->hostIds = $map['HostIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
