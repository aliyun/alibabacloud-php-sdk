<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetHotlineAgentDetailReportRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $depIds;

    /**
     * @var int[]
     */
    public $groupIds;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'startDate'   => 'StartDate',
        'endDate'     => 'EndDate',
        'instanceId'  => 'InstanceId',
        'depIds'      => 'DepIds',
        'groupIds'    => 'GroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->depIds) {
            $res['DepIds'] = $this->depIds;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotlineAgentDetailReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = $map['DepIds'];
            }
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }

        return $model;
    }
}
