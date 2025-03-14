<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData\instanceInfo;
use AlibabaCloud\Tea\Model;

class basicData extends Model
{
    /**
     * @description The ID of the check result for the instance.
     *
     * @example 300054
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID of the server.
     *
     * @example rm-m5es7ch1s62i4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The information about the instance on which the check item is used.
     *
     * @var instanceInfo
     */
    public $instanceInfo;

    /**
     * @description The instance name of the server.
     *
     * @example sg-t4nbk2aodzio52xv****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region ID of the instance.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The states of check items. Multiple states are separated with commas (,). Valid values:
     *
     *   **PASS**: passed
     *   **NOT_PASS**: failed
     *   **CHECKING**: being checked
     *   **NOT_CHECK**: not checked
     *   **WHITELIST**: added to the whitelist
     *
     * @example NOT_PASS
     *
     * @var string
     */
    public $status;

    /**
     * @description The exception message of the check item.
     *
     * @example Task is failed.
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'instanceInfo' => 'InstanceInfo',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
