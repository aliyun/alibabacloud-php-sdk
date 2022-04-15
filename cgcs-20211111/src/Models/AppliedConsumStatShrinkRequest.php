<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AppliedConsumStatShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appliedIdShrink;

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
     * @description 资源类型,PackageType[CU(cu),code,cssResourceType,desc]
     *
     * @var string
     */
    public $packageType;

    /**
     * @description 查询结束时间
     *
     * @var string
     */
    public $queryEndDate;

    /**
     * @description 查询开始时间
     *
     * @var string
     */
    public $queryStartDate;
    protected $_name = [
        'appliedIdShrink' => 'AppliedId',
        'operatorId'      => 'OperatorId',
        'operatorType'    => 'OperatorType',
        'packageType'     => 'PackageType',
        'queryEndDate'    => 'QueryEndDate',
        'queryStartDate'  => 'QueryStartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedIdShrink) {
            $res['AppliedId'] = $this->appliedIdShrink;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->queryEndDate) {
            $res['QueryEndDate'] = $this->queryEndDate;
        }
        if (null !== $this->queryStartDate) {
            $res['QueryStartDate'] = $this->queryStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppliedConsumStatShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedId'])) {
            $model->appliedIdShrink = $map['AppliedId'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['QueryEndDate'])) {
            $model->queryEndDate = $map['QueryEndDate'];
        }
        if (isset($map['QueryStartDate'])) {
            $model->queryStartDate = $map['QueryStartDate'];
        }

        return $model;
    }
}
