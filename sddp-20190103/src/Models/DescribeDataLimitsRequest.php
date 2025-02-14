<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeDataLimitsRequest extends Model
{
    /**
     * @var int
     */
    public $auditStatus;
    /**
     * @var int
     */
    public $checkStatus;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $datamaskStatus;
    /**
     * @var int
     */
    public $enable;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $engineType;
    /**
     * @var int
     */
    public $featureType;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $memberAccount;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $parentId;
    /**
     * @var int
     */
    public $resourceType;
    /**
     * @var string
     */
    public $serviceRegionId;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'auditStatus'     => 'AuditStatus',
        'checkStatus'     => 'CheckStatus',
        'currentPage'     => 'CurrentPage',
        'datamaskStatus'  => 'DatamaskStatus',
        'enable'          => 'Enable',
        'endTime'         => 'EndTime',
        'engineType'      => 'EngineType',
        'featureType'     => 'FeatureType',
        'lang'            => 'Lang',
        'memberAccount'   => 'MemberAccount',
        'pageSize'        => 'PageSize',
        'parentId'        => 'ParentId',
        'resourceType'    => 'ResourceType',
        'serviceRegionId' => 'ServiceRegionId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->datamaskStatus) {
            $res['DatamaskStatus'] = $this->datamaskStatus;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DatamaskStatus'])) {
            $model->datamaskStatus = $map['DatamaskStatus'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
