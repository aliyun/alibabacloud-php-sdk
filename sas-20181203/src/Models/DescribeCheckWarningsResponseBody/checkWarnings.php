<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponseBody;

use AlibabaCloud\Dara\Model;

class checkWarnings extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var int
     */
    public $checkWarningId;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $execErrorMessage;

    /**
     * @var int
     */
    public $fixStatus;

    /**
     * @var string
     */
    public $item;

    /**
     * @var int
     */
    public $lastHandleTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'checkId' => 'CheckId',
        'checkWarningId' => 'CheckWarningId',
        'containerId' => 'ContainerId',
        'containerName' => 'ContainerName',
        'execErrorMessage' => 'ExecErrorMessage',
        'fixStatus' => 'FixStatus',
        'item' => 'Item',
        'lastHandleTime' => 'LastHandleTime',
        'level' => 'Level',
        'reason' => 'Reason',
        'status' => 'Status',
        'type' => 'Type',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
