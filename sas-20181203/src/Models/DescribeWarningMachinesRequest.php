<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWarningMachinesRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example c7e3c5b420a7947c2933303144688****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the field that is used to search for the container. Valid values:
     *
     *   **CONTAINER_ID**: the ID of the container
     *   **IMAGE**: the name of the image
     *   **NAMESPACE**: the namespace
     *   **NODE_NAME**: the name of the node
     *   **POD_IP**: the IP address of the pod
     *   **HOST_IP**: the IP address of the host
     *   **INSTANCE_ID**: the ID of the instance
     *
     * @example containerId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the field that is used to search for the container.
     *
     * @example c8bb3ef0f5ccf45508f0fd1ffc200****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether risks were detected. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $haveRisk;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
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
     * @description The name of the server on which the baseline check is performed.
     *
     * @example oracle-win-001****
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the risk item.
     *
     * >  You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of risk items.
     * @example 196
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 16
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The type of the query condition. Valid values:
     *
     *   **containerId**: the ID of the container
     *   **uuid**: the UUID of the asset
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The UUID of the server on which the baseline check is performed. Separate multiple UUIDs with commas (,).
     *
     * @example 9888955c-0076-49da-bd9c-34f5492b****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage'         => 'CurrentPage',
        'haveRisk'            => 'HaveRisk',
        'lang'                => 'Lang',
        'machineName'         => 'MachineName',
        'pageSize'            => 'PageSize',
        'riskId'              => 'RiskId',
        'sourceIp'            => 'SourceIp',
        'strategyId'          => 'StrategyId',
        'targetType'          => 'TargetType',
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
        if (null !== $this->haveRisk) {
            $res['HaveRisk'] = $this->haveRisk;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWarningMachinesRequest
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
        if (isset($map['HaveRisk'])) {
            $model->haveRisk = $map['HaveRisk'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
