<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListProxySQLExecAuditLogRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $execState;

    /**
     * @var string
     */
    public $opUserName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $SQLType;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'endTime'    => 'EndTime',
        'execState'  => 'ExecState',
        'opUserName' => 'OpUserName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'SQLType'    => 'SQLType',
        'searchName' => 'SearchName',
        'startTime'  => 'StartTime',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->execState) {
            $res['ExecState'] = $this->execState;
        }
        if (null !== $this->opUserName) {
            $res['OpUserName'] = $this->opUserName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProxySQLExecAuditLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecState'])) {
            $model->execState = $map['ExecState'];
        }
        if (isset($map['OpUserName'])) {
            $model->opUserName = $map['OpUserName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
