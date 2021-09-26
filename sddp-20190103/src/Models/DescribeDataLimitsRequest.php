<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataLimitsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

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
    public $resourceType;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $engineType;

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
    public $startTime;

    /**
     * @var int
     */
    public $endTime;
    protected $_name = [
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'currentPage'     => 'CurrentPage',
        'resourceType'    => 'ResourceType',
        'parentId'        => 'ParentId',
        'serviceRegionId' => 'ServiceRegionId',
        'checkStatus'     => 'CheckStatus',
        'auditStatus'     => 'AuditStatus',
        'engineType'      => 'EngineType',
        'datamaskStatus'  => 'DatamaskStatus',
        'enable'          => 'Enable',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->datamaskStatus) {
            $res['DatamaskStatus'] = $this->datamaskStatus;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['DatamaskStatus'])) {
            $model->datamaskStatus = $map['DatamaskStatus'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
