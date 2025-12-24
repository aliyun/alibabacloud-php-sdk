<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details;

use AlibabaCloud\Dara\Model;

class actions extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $actionUuid;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $component;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'actionUuid' => 'ActionUuid',
        'assetName' => 'AssetName',
        'component' => 'Component',
        'endTime' => 'EndTime',
        'nodeName' => 'NodeName',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
