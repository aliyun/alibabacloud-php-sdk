<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudCenterInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $importance;

    /**
     * @var string
     */
    public $logicalExp;

    /**
     * @var string
     */
    public $machineTypes;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'criteria'     => 'Criteria',
        'currentPage'  => 'CurrentPage',
        'importance'   => 'Importance',
        'logicalExp'   => 'LogicalExp',
        'machineTypes' => 'MachineTypes',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudCenterInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
