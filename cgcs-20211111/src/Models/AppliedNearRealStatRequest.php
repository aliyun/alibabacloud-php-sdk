<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AppliedNearRealStatRequest extends Model
{
    /**
     * @var string[]
     */
    public $appliedVersionId;

    /**
     * @description 请求操作人Id
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description 请求操作人类型
     *
     * @var string
     */
    public $operatorType;

    /**
     * @description 排序类型。默认：AppliedConcurrency_Desc,AppliedNearRealOrderConditionType[AppliedConcurrency_Desc(AppliedConcurrency_Desc,根据实时并发路数降序排列),AppliedConcurrency_Asc(AppliedConcurrency_Asc,根据实时并发路数升序排列),AppliedConsumptionCu_Desc(AppliedConsumptionCu_Desc,根据实时CU消耗降序排列),AppliedConsumptionCu_Asc(AppliedConsumptionCu_Asc,根据实时CU消耗升序排列),orderByType,desc]
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 资源类型,PackageType[CU(cu),code,cssResourceType,desc]
     *
     * @var string
     */
    public $packageType;

    /**
     * @description 当前页码，默认1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页项数，默认20,最大100
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appliedVersionId' => 'AppliedVersionId',
        'operatorId'       => 'OperatorId',
        'operatorType'     => 'OperatorType',
        'orderBy'          => 'OrderBy',
        'packageType'      => 'PackageType',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedVersionId) {
            $res['AppliedVersionId'] = $this->appliedVersionId;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppliedNearRealStatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedVersionId'])) {
            if (!empty($map['AppliedVersionId'])) {
                $model->appliedVersionId = $map['AppliedVersionId'];
            }
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
