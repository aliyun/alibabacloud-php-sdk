<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningSummaryRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example c80dae73bd1be442699766b14ffd0****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the container field. Valid values:
     *
     *   **clusterId**: the ID of the cluster
     *   **image**: the name of the image
     *   **imageId**: the ID of the image
     *   **namespace**: the namespace
     *
     * @example namespace
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the container field.
     *
     * @example c819391d2d520485fa3e81e2dc2ea****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the risk item.
     *
     * @example Redis
     *
     * @var string
     */
    public $riskName;

    /**
     * @description The status of the baseline check. Valid values:
     *
     *   **1**: failed
     *   **3**: passed
     *
     * @example 1
     *
     * @var int
     */
    public $riskStatus;

    /**
     * @description The source IP address of the request.
     *
     * @example 219.133.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the check item. Valid values:
     *
     *   **1**: failed
     *   **2**: verifying
     *   **3**: passed
     *   **5**: expired
     *   **6**: ignored
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 1
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The type of the query condition. Valid values:
     *
     *   **uuid**: the ID of an asset
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The level-1 type of check items.
     *
     * >  You can call the [DescribeRiskType](~~DescribeRiskType~~) operation to query the level-1 types of check items.
     * @example database
     *
     * @var string
     */
    public $typeName;

    /**
     * @description The UUID of the asset.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of assets.
     * @example f03259d8-1e81-4fae-bcbb-275fb5****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage'         => 'CurrentPage',
        'lang'                => 'Lang',
        'pageSize'            => 'PageSize',
        'riskName'            => 'RiskName',
        'riskStatus'          => 'RiskStatus',
        'sourceIp'            => 'SourceIp',
        'status'              => 'Status',
        'strategyId'          => 'StrategyId',
        'targetType'          => 'TargetType',
        'typeName'            => 'TypeName',
        'uuids'               => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
