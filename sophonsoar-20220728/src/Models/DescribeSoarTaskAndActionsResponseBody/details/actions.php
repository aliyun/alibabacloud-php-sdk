<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @description The action name of the component.
     *
     * @example formatdata
     *
     * @var string
     */
    public $action;

    /**
     * @description The UUID of the component execution record.
     *
     * @example 091be399-a937-4276-af78-xxxxxxxx
     *
     * @var string
     */
    public $actionUuid;

    /**
     * @description The name of the asset that is used by the component.
     *
     * @example SLS Asset
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The component name.
     *
     * @example DataFormat
     *
     * @var string
     */
    public $component;

    /**
     * @description The end of the time range during which the component is run. The value is a 13-digit timestamp.
     *
     * @example 1699868848766
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The custom name of the node in the component.
     *
     * @example DataFormat_1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The request ID of the task. The value is unique.
     *
     * @example 8dac16c6-7411-4116-8d70-xxxxxxx
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @description The beginning of the time range during which the component is run. The value is a 13-digit timestamp.
     *
     * @example 1699868848731
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The running result of the component. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the task. The value is the same as the playbook UUID.
     *
     * @example ed127287-6699-4e4d-b986-xxxxxxx
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The status of the triggered component action.
     *
     * >  This parameter is disabled and left empty.
     * @example NULL
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The ID of the Alibaba Cloud account that is used to execute the task.
     *
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
