<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListVirusFileStatusesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $fileProcessStatus;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string[]
     */
    public $operations;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $riskLevels;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $scanTaskId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string[]
     */
    public $virusTypes;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'department' => 'Department',
        'devTag' => 'DevTag',
        'devType' => 'DevType',
        'endTime' => 'EndTime',
        'fileMd5' => 'FileMd5',
        'fileProcessStatus' => 'FileProcessStatus',
        'hostname' => 'Hostname',
        'operations' => 'Operations',
        'pageSize' => 'PageSize',
        'riskLevels' => 'RiskLevels',
        'saseUserId' => 'SaseUserId',
        'scanTaskId' => 'ScanTaskId',
        'startTime' => 'StartTime',
        'username' => 'Username',
        'virusTypes' => 'VirusTypes',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        if (\is_array($this->riskLevels)) {
            Model::validateArray($this->riskLevels);
        }
        if (\is_array($this->virusTypes)) {
            Model::validateArray($this->virusTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->fileProcessStatus) {
            $res['FileProcessStatus'] = $this->fileProcessStatus;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['Operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['Operations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->riskLevels) {
            if (\is_array($this->riskLevels)) {
                $res['RiskLevels'] = [];
                $n1 = 0;
                foreach ($this->riskLevels as $item1) {
                    $res['RiskLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->virusTypes) {
            if (\is_array($this->virusTypes)) {
                $res['VirusTypes'] = [];
                $n1 = 0;
                foreach ($this->virusTypes as $item1) {
                    $res['VirusTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['FileProcessStatus'])) {
            $model->fileProcessStatus = $map['FileProcessStatus'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Operations'])) {
            if (!empty($map['Operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['Operations'] as $item1) {
                    $model->operations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RiskLevels'])) {
            if (!empty($map['RiskLevels'])) {
                $model->riskLevels = [];
                $n1 = 0;
                foreach ($map['RiskLevels'] as $item1) {
                    $model->riskLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VirusTypes'])) {
            if (!empty($map['VirusTypes'])) {
                $model->virusTypes = [];
                $n1 = 0;
                foreach ($map['VirusTypes'] as $item1) {
                    $model->virusTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
