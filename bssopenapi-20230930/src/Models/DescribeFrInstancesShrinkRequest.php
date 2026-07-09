<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeFrInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $capacityType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceTag;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortRule;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'capacityType' => 'CapacityType',
        'commodityCode' => 'CommodityCode',
        'cycleType' => 'CycleType',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'endTime' => 'EndTime',
        'group' => 'Group',
        'instanceId' => 'InstanceId',
        'instanceTag' => 'InstanceTag',
        'nbid' => 'Nbid',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'sortField' => 'SortField',
        'sortRule' => 'SortRule',
        'spec' => 'Spec',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityType) {
            $res['CapacityType'] = $this->capacityType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }

        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceTag) {
            $res['InstanceTag'] = $this->instanceTag;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }

        if (null !== $this->sortRule) {
            $res['SortRule'] = $this->sortRule;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
        if (isset($map['CapacityType'])) {
            $model->capacityType = $map['CapacityType'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }

        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceTag'])) {
            $model->instanceTag = $map['InstanceTag'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        if (isset($map['SortRule'])) {
            $model->sortRule = $map['SortRule'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
