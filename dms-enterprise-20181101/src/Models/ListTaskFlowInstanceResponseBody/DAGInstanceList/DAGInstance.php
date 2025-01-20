<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody\DAGInstanceList;

use AlibabaCloud\Dara\Model;

class DAGInstance extends Model
{
    /**
     * @var string
     */
    public $businessTime;
    /**
     * @var string
     */
    public $dagId;
    /**
     * @var string
     */
    public $dagName;
    /**
     * @var string
     */
    public $dagVersion;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $historyDagId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $ownerName;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $triggerType;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'businessTime' => 'BusinessTime',
        'dagId'        => 'DagId',
        'dagName'      => 'DagName',
        'dagVersion'   => 'DagVersion',
        'endTime'      => 'EndTime',
        'historyDagId' => 'HistoryDagId',
        'id'           => 'Id',
        'message'      => 'Message',
        'ownerName'    => 'OwnerName',
        'status'       => 'Status',
        'triggerType'  => 'TriggerType',
        'startTime'    => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessTime) {
            $res['BusinessTime'] = $this->businessTime;
        }

        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }

        if (null !== $this->dagVersion) {
            $res['DagVersion'] = $this->dagVersion;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->historyDagId) {
            $res['HistoryDagId'] = $this->historyDagId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }

        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }

        if (isset($map['DagVersion'])) {
            $model->dagVersion = $map['DagVersion'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['HistoryDagId'])) {
            $model->historyDagId = $map['HistoryDagId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
