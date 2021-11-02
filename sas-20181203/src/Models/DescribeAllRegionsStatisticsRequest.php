<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAllRegionsStatisticsRequest extends Model
{
    /**
     * @var int
     */
    public $action1;

    /**
     * @var bool
     */
    public $allRegion;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $secureToken;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startTime;

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
    public $tag;

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
    public $webGroupId;
    protected $_name = [
        'action1'     => 'Action1',
        'allRegion'   => 'AllRegion',
        'currentPage' => 'CurrentPage',
        'dealed'      => 'Dealed',
        'endTime'     => 'EndTime',
        'flow'        => 'Flow',
        'from'        => 'From',
        'groupId'     => 'GroupId',
        'pageSize'    => 'PageSize',
        'remark'      => 'Remark',
        'ruleType'    => 'RuleType',
        'saleId'      => 'SaleId',
        'secureToken' => 'SecureToken',
        'sourceIp'    => 'SourceIp',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'statusList'  => 'StatusList',
        'tag'         => 'Tag',
        'type'        => 'Type',
        'uuid'        => 'Uuid',
        'webGroupId'  => 'WebGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action1) {
            $res['Action1'] = $this->action1;
        }
        if (null !== $this->allRegion) {
            $res['AllRegion'] = $this->allRegion;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->secureToken) {
            $res['SecureToken'] = $this->secureToken;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->webGroupId) {
            $res['WebGroupId'] = $this->webGroupId;
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
        if (isset($map['Action1'])) {
            $model->action1 = $map['Action1'];
        }
        if (isset($map['AllRegion'])) {
            $model->allRegion = $map['AllRegion'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['SecureToken'])) {
            $model->secureToken = $map['SecureToken'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WebGroupId'])) {
            $model->webGroupId = $map['WebGroupId'];
        }

        return $model;
    }
}
