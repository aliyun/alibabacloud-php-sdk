<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListVirusScanTaskRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $machineName;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var bool
     */
    public $rootTask;
    /**
     * @var string
     */
    public $rootTaskId;
    /**
     * @var string
     */
    public $scanType;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int[]
     */
    public $statusList;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'internetIp'  => 'InternetIp',
        'intranetIp'  => 'IntranetIp',
        'lang'        => 'Lang',
        'machineName' => 'MachineName',
        'pageSize'    => 'PageSize',
        'rootTask'    => 'RootTask',
        'rootTaskId'  => 'RootTaskId',
        'scanType'    => 'ScanType',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'statusList'  => 'StatusList',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->rootTask) {
            $res['RootTask'] = $this->rootTask;
        }

        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1                = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RootTask'])) {
            $model->rootTask = $map['RootTask'];
        }

        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1                = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
