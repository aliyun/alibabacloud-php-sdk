<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigResponseBody\moduleConfigList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The ID of the server group to which the server belongs.
     *
     * @example 5562414
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The instance ID of the server.
     *
     * @example i-uf6435dn4t59b9av****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the server.
     *
     * @example inStanceName****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The IP address of the server.
     *
     * @example 2.2.X.X
     *
     * @var string
     */
    public $ip;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The UUID of the server.
     *
     * @example a47e3713-ed22-4015-93a3-d88ebe6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'groupId'      => 'GroupId',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'ip'           => 'Ip',
        'region'       => 'Region',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
