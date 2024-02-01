<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\service;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetServiceInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizStatus;

    /**
     * @description 云市场额外计费项。
     *
     * @example {"TiKVServerCount":"3","package_version":"yuncode5398300001","PDServerCount":"3","TiDBServerCount":"2"}
     *
     * @var string
     */
    public $components;

    /**
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOperated;

    /**
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $licenseEndTime;

    /**
     * @example 704***59
     *
     * @var string
     */
    public $marketInstanceId;

    /**
     * @example TestName
     *
     * @var string
     */
    public $name;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $operatedServiceInstanceId;

    /**
     * @example 2022-01-28T06:48:56Z
     *
     * @var string
     */
    public $operationEndTime;

    /**
     * @example 2021-12-29T06:48:56Z
     *
     * @var string
     */
    public $operationStartTime;

    /**
     * @example {"InstanceIds":["i-hp38ofxl0dsyfi7z****"]}
     *
     * @var string
     */
    public $outputs;

    /**
     * @example {"param":"value"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @description 套餐名称。
     *
     * @example 套餐一
     *
     * @var string
     */
    public $predefinedParameterName;

    /**
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @example 4DB0F536-B3BE-4F0D-BD29-E83FB56D550C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example [{"StackId": "stack-xxx"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @var service
     */
    public $service;

    /**
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example User
     *
     * @var string
     */
    public $source;

    /**
     * @example Deployed
     *
     * @var string
     */
    public $status;

    /**
     * @example deploy successfully
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @example 158927391332*****
     *
     * @var int
     */
    public $supplierUid;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 130920852836****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'bizStatus'                 => 'BizStatus',
        'components'                => 'Components',
        'createTime'                => 'CreateTime',
        'enableInstanceOps'         => 'EnableInstanceOps',
        'enableUserPrometheus'      => 'EnableUserPrometheus',
        'endTime'                   => 'EndTime',
        'isOperated'                => 'IsOperated',
        'licenseEndTime'            => 'LicenseEndTime',
        'marketInstanceId'          => 'MarketInstanceId',
        'name'                      => 'Name',
        'networkConfig'             => 'NetworkConfig',
        'operatedServiceInstanceId' => 'OperatedServiceInstanceId',
        'operationEndTime'          => 'OperationEndTime',
        'operationStartTime'        => 'OperationStartTime',
        'outputs'                   => 'Outputs',
        'parameters'                => 'Parameters',
        'payType'                   => 'PayType',
        'predefinedParameterName'   => 'PredefinedParameterName',
        'progress'                  => 'Progress',
        'requestId'                 => 'RequestId',
        'resourceGroupId'           => 'ResourceGroupId',
        'resources'                 => 'Resources',
        'service'                   => 'Service',
        'serviceInstanceId'         => 'ServiceInstanceId',
        'serviceType'               => 'ServiceType',
        'source'                    => 'Source',
        'status'                    => 'Status',
        'statusDetail'              => 'StatusDetail',
        'supplierUid'               => 'SupplierUid',
        'tags'                      => 'Tags',
        'templateName'              => 'TemplateName',
        'updateTime'                => 'UpdateTime',
        'userId'                    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableInstanceOps) {
            $res['EnableInstanceOps'] = $this->enableInstanceOps;
        }
        if (null !== $this->enableUserPrometheus) {
            $res['EnableUserPrometheus'] = $this->enableUserPrometheus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isOperated) {
            $res['IsOperated'] = $this->isOperated;
        }
        if (null !== $this->licenseEndTime) {
            $res['LicenseEndTime'] = $this->licenseEndTime;
        }
        if (null !== $this->marketInstanceId) {
            $res['MarketInstanceId'] = $this->marketInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkConfig) {
            $res['NetworkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }
        if (null !== $this->operatedServiceInstanceId) {
            $res['OperatedServiceInstanceId'] = $this->operatedServiceInstanceId;
        }
        if (null !== $this->operationEndTime) {
            $res['OperationEndTime'] = $this->operationEndTime;
        }
        if (null !== $this->operationStartTime) {
            $res['OperationStartTime'] = $this->operationStartTime;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->predefinedParameterName) {
            $res['PredefinedParameterName'] = $this->predefinedParameterName;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->service) {
            $res['Service'] = null !== $this->service ? $this->service->toMap() : null;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->supplierUid) {
            $res['SupplierUid'] = $this->supplierUid;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableInstanceOps'])) {
            $model->enableInstanceOps = $map['EnableInstanceOps'];
        }
        if (isset($map['EnableUserPrometheus'])) {
            $model->enableUserPrometheus = $map['EnableUserPrometheus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsOperated'])) {
            $model->isOperated = $map['IsOperated'];
        }
        if (isset($map['LicenseEndTime'])) {
            $model->licenseEndTime = $map['LicenseEndTime'];
        }
        if (isset($map['MarketInstanceId'])) {
            $model->marketInstanceId = $map['MarketInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['NetworkConfig']);
        }
        if (isset($map['OperatedServiceInstanceId'])) {
            $model->operatedServiceInstanceId = $map['OperatedServiceInstanceId'];
        }
        if (isset($map['OperationEndTime'])) {
            $model->operationEndTime = $map['OperationEndTime'];
        }
        if (isset($map['OperationStartTime'])) {
            $model->operationStartTime = $map['OperationStartTime'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PredefinedParameterName'])) {
            $model->predefinedParameterName = $map['PredefinedParameterName'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['Service'])) {
            $model->service = service::fromMap($map['Service']);
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['SupplierUid'])) {
            $model->supplierUid = $map['SupplierUid'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
