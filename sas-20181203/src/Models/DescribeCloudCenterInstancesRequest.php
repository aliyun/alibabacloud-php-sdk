<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudCenterInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $criteria;

    /**
     * @var string
     */
    public $machineTypes;

    /**
     * @var string
     */
    public $logicalExp;

    /**
     * @var bool
     */
    public $noPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $importance;
    protected $_name = [
        'regionId'     => 'RegionId',
        'criteria'     => 'Criteria',
        'machineTypes' => 'MachineTypes',
        'logicalExp'   => 'LogicalExp',
        'noPage'       => 'NoPage',
        'pageSize'     => 'PageSize',
        'currentPage'  => 'CurrentPage',
        'importance'   => 'Importance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->noPage) {
            $res['NoPage'] = $this->noPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['NoPage'])) {
            $model->noPage = $map['NoPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }

        return $model;
    }
}
