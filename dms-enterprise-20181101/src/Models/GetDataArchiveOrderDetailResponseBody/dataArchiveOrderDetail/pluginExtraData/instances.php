<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $businessTime;

    /**
     * @example 37***
     *
     * @var int
     */
    public $dagId;

    /**
     * @example 2022-06-04 15:14:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 32***
     *
     * @var int
     */
    public $historyDagId;

    /**
     * @example 24***
     *
     * @var int
     */
    public $id;

    /**
     * @example {
     * "nodes": [
     * 48**
     * }
     * @var string
     */
    public $lastRunningContext;

    /**
     * @var string
     */
    public $msg;

    /**
     * @example 4
     *
     * @var int
     */
    public $status;

    /**
     * @example 5***
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 1
     *
     * @var int
     */
    public $triggerType;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'businessTime'       => 'BusinessTime',
        'dagId'              => 'DagId',
        'endTime'            => 'EndTime',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'historyDagId'       => 'HistoryDagId',
        'id'                 => 'Id',
        'lastRunningContext' => 'LastRunningContext',
        'msg'                => 'Msg',
        'status'             => 'Status',
        'tenantId'           => 'TenantId',
        'triggerType'        => 'TriggerType',
        'version'            => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTime) {
            $res['BusinessTime'] = $this->businessTime;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->historyDagId) {
            $res['HistoryDagId'] = $this->historyDagId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastRunningContext) {
            $res['LastRunningContext'] = $this->lastRunningContext;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HistoryDagId'])) {
            $model->historyDagId = $map['HistoryDagId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastRunningContext'])) {
            $model->lastRunningContext = $map['LastRunningContext'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
