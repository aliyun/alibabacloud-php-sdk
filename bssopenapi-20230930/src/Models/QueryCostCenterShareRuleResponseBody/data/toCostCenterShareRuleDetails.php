<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShareRuleResponseBody\data;

use AlibabaCloud\Dara\Model;

class toCostCenterShareRuleDetails extends Model
{
    /**
     * @var string
     */
    public $costCenterCode;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var int
     */
    public $parentCostCenterId;

    /**
     * @var int
     */
    public $prevCostCenterId;

    /**
     * @var int
     */
    public $rootCostCenterId;

    /**
     * @var float
     */
    public $shareRatio;
    protected $_name = [
        'costCenterCode' => 'CostCenterCode',
        'costCenterId' => 'CostCenterId',
        'costCenterName' => 'CostCenterName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'ownerAccountId' => 'OwnerAccountId',
        'parentCostCenterId' => 'ParentCostCenterId',
        'prevCostCenterId' => 'PrevCostCenterId',
        'rootCostCenterId' => 'RootCostCenterId',
        'shareRatio' => 'ShareRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterCode) {
            $res['CostCenterCode'] = $this->costCenterCode;
        }

        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->costCenterName) {
            $res['CostCenterName'] = $this->costCenterName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->parentCostCenterId) {
            $res['ParentCostCenterId'] = $this->parentCostCenterId;
        }

        if (null !== $this->prevCostCenterId) {
            $res['PrevCostCenterId'] = $this->prevCostCenterId;
        }

        if (null !== $this->rootCostCenterId) {
            $res['RootCostCenterId'] = $this->rootCostCenterId;
        }

        if (null !== $this->shareRatio) {
            $res['ShareRatio'] = $this->shareRatio;
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
        if (isset($map['CostCenterCode'])) {
            $model->costCenterCode = $map['CostCenterCode'];
        }

        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['CostCenterName'])) {
            $model->costCenterName = $map['CostCenterName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['ParentCostCenterId'])) {
            $model->parentCostCenterId = $map['ParentCostCenterId'];
        }

        if (isset($map['PrevCostCenterId'])) {
            $model->prevCostCenterId = $map['PrevCostCenterId'];
        }

        if (isset($map['RootCostCenterId'])) {
            $model->rootCostCenterId = $map['RootCostCenterId'];
        }

        if (isset($map['ShareRatio'])) {
            $model->shareRatio = $map['ShareRatio'];
        }

        return $model;
    }
}
