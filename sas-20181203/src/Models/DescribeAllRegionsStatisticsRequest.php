<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAllRegionsStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $webGroupId;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $action1;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $secureToken;

    /**
     * @var bool
     */
    public $allRegion;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'from'        => 'From',
        'groupId'     => 'GroupId',
        'remark'      => 'Remark',
        'type'        => 'Type',
        'uuid'        => 'Uuid',
        'status'      => 'Status',
        'statusList'  => 'StatusList',
        'startTime'   => 'StartTime',
        'endTime'     => 'EndTime',
        'webGroupId'  => 'WebGroupId',
        'ruleType'    => 'RuleType',
        'action1'     => 'Action1',
        'flow'        => 'Flow',
        'saleId'      => 'SaleId',
        'dealed'      => 'Dealed',
        'tag'         => 'Tag',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'secureToken' => 'SecureToken',
        'allRegion'   => 'AllRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->webGroupId) {
            $res['WebGroupId'] = $this->webGroupId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->action1) {
            $res['Action1'] = $this->action1;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->secureToken) {
            $res['SecureToken'] = $this->secureToken;
        }
        if (null !== $this->allRegion) {
            $res['AllRegion'] = $this->allRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllRegionsStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['WebGroupId'])) {
            $model->webGroupId = $map['WebGroupId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Action1'])) {
            $model->action1 = $map['Action1'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecureToken'])) {
            $model->secureToken = $map['SecureToken'];
        }
        if (isset($map['AllRegion'])) {
            $model->allRegion = $map['AllRegion'];
        }

        return $model;
    }
}
