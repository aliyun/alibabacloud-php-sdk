<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetSeatInformationShrinkRequest extends Model
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
     * @var string
     */
    public $depIdsShrink;

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
        'depIdsShrink' => 'depIds',
        'endDate' => 'endDate',
        'existDepartmentGrouping' => 'existDepartmentGrouping',
        'pageSize' => 'pageSize',
        'startDate' => 'startDate',
    ];

    public function validate()
    {
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

        if (null !== $this->depIdsShrink) {
            $res['depIds'] = $this->depIdsShrink;
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
            $model->depIdsShrink = $map['depIds'];
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
