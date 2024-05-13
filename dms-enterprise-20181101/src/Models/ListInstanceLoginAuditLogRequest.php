<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceLoginAuditLogRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 2021-11-18 18:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The alias of the user.
     *
     * @example test_OpUserName
     *
     * @var string
     */
    public $opUserName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the database or instance whose logon records you want to query.
     *
     * >  If SQL statements are executed at the instance level, you can set this parameter to an instance name. If SQL statements are executed at the database level, you can set this parameter to a database name.
     * @example test_SearchName
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 2021-11-18 11:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'endTime'    => 'EndTime',
        'opUserName' => 'OpUserName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
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
        if (null !== $this->opUserName) {
            $res['OpUserName'] = $this->opUserName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListInstanceLoginAuditLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
