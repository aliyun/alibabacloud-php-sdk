<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetRiskPatrolListRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $businessGroupName;

    /**
     * @var int
     */
    public $currentPage;

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
    public $riskPatrolItem;

    /**
     * @var int
     */
    public $severityLevel;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'businessGroupId'   => 'BusinessGroupId',
        'businessGroupName' => 'BusinessGroupName',
        'currentPage'       => 'CurrentPage',
        'operaUid'          => 'OperaUid',
        'pageSize'          => 'PageSize',
        'patrolId'          => 'PatrolId',
        'riskPatrolItem'    => 'RiskPatrolItem',
        'severityLevel'     => 'SeverityLevel',
        'status'            => 'Status',
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
        if (null !== $this->businessGroupName) {
            $res['BusinessGroupName'] = $this->businessGroupName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->riskPatrolItem) {
            $res['RiskPatrolItem'] = $this->riskPatrolItem;
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
     * @return GetRiskPatrolListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['BusinessGroupName'])) {
            $model->businessGroupName = $map['BusinessGroupName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['RiskPatrolItem'])) {
            $model->riskPatrolItem = $map['RiskPatrolItem'];
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
