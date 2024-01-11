<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponseBody;

use AlibabaCloud\Tea\Model;

class checkWarnings extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 2546
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The ID of the alert that is triggered by the check item.
     *
     * @example 212251441
     *
     * @var int
     */
    public $checkWarningId;

    /**
     * @description The ID of the container.
     *
     * @example 8de456b00ff0a2009ee8ef7fc59fd0457fa44f20b8282af3e79c2a0e2492****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The name of the container.
     *
     * @example /svn-host
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The error message in the check result.
     *
     * @example ScriptKilledOfCpuHigh
     *
     * @var string
     */
    public $execErrorMessage;

    /**
     * @description Indicates whether the fix is supported. Valid values:
     *
     *   **0**: The fix is not supported.
     *   **1**: The fix is supported.
     *
     * @example 0
     *
     * @var int
     */
    public $fixStatus;

    /**
     * @description The name of the check item.
     *
     * @example passwordExpire
     *
     * @var string
     */
    public $item;

    /**
     * @var int
     */
    public $lastHandleTime;

    /**
     * @description The severity level of a risk item. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @description The remarks.
     *
     * @example ignore
     *
     * @var string
     */
    public $reason;

    /**
     * @description The status of the check item. Valid values:
     *
     *   **1**: failed
     *   **2**: verifying
     *   **3**: passed
     *   **5**: expired
     *   **6**: ignored
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the check item.
     *
     * @example hc.check.type.identity_auth
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server on which the baseline check is performed.
     *
     * @example d42f938c-d962-48a0-90f9-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'checkId'          => 'CheckId',
        'checkWarningId'   => 'CheckWarningId',
        'containerId'      => 'ContainerId',
        'containerName'    => 'ContainerName',
        'execErrorMessage' => 'ExecErrorMessage',
        'fixStatus'        => 'FixStatus',
        'item'             => 'Item',
        'lastHandleTime'   => 'LastHandleTime',
        'level'            => 'Level',
        'reason'           => 'Reason',
        'status'           => 'Status',
        'type'             => 'Type',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkWarningId) {
            $res['CheckWarningId'] = $this->checkWarningId;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->execErrorMessage) {
            $res['ExecErrorMessage'] = $this->execErrorMessage;
        }
        if (null !== $this->fixStatus) {
            $res['FixStatus'] = $this->fixStatus;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->lastHandleTime) {
            $res['LastHandleTime'] = $this->lastHandleTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkWarnings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckWarningId'])) {
            $model->checkWarningId = $map['CheckWarningId'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['ExecErrorMessage'])) {
            $model->execErrorMessage = $map['ExecErrorMessage'];
        }
        if (isset($map['FixStatus'])) {
            $model->fixStatus = $map['FixStatus'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['LastHandleTime'])) {
            $model->lastHandleTime = $map['LastHandleTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
