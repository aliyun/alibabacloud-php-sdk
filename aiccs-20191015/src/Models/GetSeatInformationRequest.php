<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetSeatInformationRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

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
     * @var bool
     */
    public $existDepartmentGrouping;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startDate;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'currentPage' => 'currentPage',
        'depIds' => 'depIds',
        'endDate' => 'endDate',
        'existDepartmentGrouping' => 'existDepartmentGrouping',
        'pageSize' => 'pageSize',
        'startDate' => 'startDate',
    ];

    public function validate()
    {
        if (\is_array($this->depIds)) {
            Model::validateArray($this->depIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->depIds) {
            if (\is_array($this->depIds)) {
                $res['depIds'] = [];
                $n1 = 0;
                foreach ($this->depIds as $item1) {
                    $res['depIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->existDepartmentGrouping) {
            $res['existDepartmentGrouping'] = $this->existDepartmentGrouping;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['depIds'])) {
            if (!empty($map['depIds'])) {
                $model->depIds = [];
                $n1 = 0;
                foreach ($map['depIds'] as $item1) {
                    $model->depIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['existDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['existDepartmentGrouping'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
