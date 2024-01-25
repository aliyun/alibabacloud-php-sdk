<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetPatrolInspectionListRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $patrolId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $riskPatrolItem;

    /**
     * @var int
     */
    public $riskType;

    /**
     * @var int
     */
    public $severityLevel;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'businessGroupId' => 'BusinessGroupId',
        'currentPage'     => 'CurrentPage',
        'lang'            => 'Lang',
        'operaUid'        => 'OperaUid',
        'pageSize'        => 'PageSize',
        'patrolId'        => 'PatrolId',
        'productCode'     => 'ProductCode',
        'riskLevel'       => 'RiskLevel',
        'riskName'        => 'RiskName',
        'riskPatrolItem'  => 'RiskPatrolItem',
        'riskType'        => 'RiskType',
        'severityLevel'   => 'SeverityLevel',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->patrolId) {
            $res['PatrolId'] = $this->patrolId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->riskPatrolItem) {
            $res['RiskPatrolItem'] = $this->riskPatrolItem;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }
        if (null !== $this->severityLevel) {
            $res['SeverityLevel'] = $this->severityLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPatrolInspectionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PatrolId'])) {
            $model->patrolId = $map['PatrolId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['RiskPatrolItem'])) {
            $model->riskPatrolItem = $map['RiskPatrolItem'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }
        if (isset($map['SeverityLevel'])) {
            $model->severityLevel = $map['SeverityLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
