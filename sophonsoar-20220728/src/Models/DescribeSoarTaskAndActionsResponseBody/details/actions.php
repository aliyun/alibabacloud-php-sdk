<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @example formatdata
     *
     * @var string
     */
    public $action;

    /**
     * @example 091be399-a937-4276-af78-xxxxxxxx
     *
     * @var string
     */
    public $actionUuid;

    /**
     * @example SLS Asset
     *
     * @var string
     */
    public $assetName;

    /**
     * @example DataFormat
     *
     * @var string
     */
    public $component;

    /**
     * @example 1699868848766
     *
     * @var int
     */
    public $endTime;

    /**
     * @example DataFormat_1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example 8dac16c6-7411-4116-8d70-xxxxxxx
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @example 1699868848731
     *
     * @var int
     */
    public $startTime;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example ed127287-6699-4e4d-b986-xxxxxxx
     *
     * @var string
     */
    public $taskName;

    /**
     * @example NULL
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example 127xxxx4392
     *
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'action'      => 'Action',
        'actionUuid'  => 'ActionUuid',
        'assetName'   => 'AssetName',
        'component'   => 'Component',
        'endTime'     => 'EndTime',
        'nodeName'    => 'NodeName',
        'requestUuid' => 'RequestUuid',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'taskName'    => 'TaskName',
        'taskStatus'  => 'TaskStatus',
        'triggerUser' => 'TriggerUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionUuid) {
            $res['ActionUuid'] = $this->actionUuid;
        }
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionUuid'])) {
            $model->actionUuid = $map['ActionUuid'];
        }
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
