<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody;

use AlibabaCloud\Tea\Model;

class basicData extends Model
{
    /**
     * @description The check result ID of the instance.
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
     * @description The name of the instance.
     *
     * @example sg-t4nbk2aodzio52xv****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The states of check items. Multiple states are separated with commas (,). Valid values:
     *
     *   **PASS**: The instance passed the check.
     *   **NOT_PASS**: The instance failed to pass the check.
     *   **CHECKING**: The instance is being checked.
     *   **NOT_CHECK**: The instance is not checked.
     *   **WHITELIST**: The instance is in the whitelist.
     *
     * @example NOT_PASS
     *
     * @var string
     */
    public $status;

    /**
     * @example Task is failed.
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'id'            => 'Id',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'regionId'      => 'RegionId',
        'status'        => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
