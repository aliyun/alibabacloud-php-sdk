<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetHotlineGroupDetailReportRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int[]
     */
    public $depIds;
    /**
     * @var int
     */
    public $endDate;
    /**
     * @var int[]
     */
    public $groupIds;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $startDate;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'depIds'      => 'DepIds',
        'endDate'     => 'EndDate',
        'groupIds'    => 'GroupIds',
        'instanceId'  => 'InstanceId',
        'pageSize'    => 'PageSize',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->depIds)) {
            Model::validateArray($this->depIds);
        }
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->depIds) {
            if (\is_array($this->depIds)) {
                $res['DepIds'] = [];
                $n1            = 0;
                foreach ($this->depIds as $item1) {
                    $res['DepIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1              = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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

        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = [];
                $n1            = 0;
                foreach ($map['DepIds'] as $item1) {
                    $model->depIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1              = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
