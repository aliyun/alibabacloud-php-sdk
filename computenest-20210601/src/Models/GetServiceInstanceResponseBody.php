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
     * @description The business state of the service instance. Valid values:
     *
     *   Normal
     *   Renewing
     *   RenewFailed
     *   Expired
     *
     * @example Normal
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @description Cloud Marketplace additional billing items.
     *
     * @example {"TiKVServerCount":"3","package_version":"yuncode5398300001","PDServerCount":"3","TiDBServerCount":"2"}
     *
     * @var string
     */
    public $components;

    /**
     * @description The time when the serviceInstance was created.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the service instance supports the operation feature. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @description Whether to enable Prometheus monitoring.
     *
     * @example true
     *
     * @var bool
     */
    public $enableUserPrometheus;

    /**
     * @description The expiration time of service instance.
     *
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The URL of the Grafana dashboard.
     *
     * @example https://g.console.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxx-xxxxxxxx-and-dashboard?orgId=355401&refresh=10s
     *
     * @var string
     */
    public $grafanaDashBoardUrl;

    /**
     * @description Indicates whether the hosted O\\&M feature is enabled for the service instance. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isOperated;

    /**
     * @description The expiration time of licence.
     *
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $licenseEndTime;

    /**
     * @description The market Instance ID.
     *
     * @example 704***59
     *
     * @var string
     */
    public $marketInstanceId;

    /**
     * @description The name of the service instance.
     *
     * @example TestName
     *
     * @var string
     */
    public $name;

    /**
     * @description The network configurations.
     *
     * >  This parameter is discontinued.
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @description The serviceInstance  to be operated.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $operatedServiceInstanceId;

    /**
     * @description The operation end time.
     *
     * @example 2022-01-28T06:48:56Z
     *
     * @var string
     */
    public $operationEndTime;

    /**
     * @description The operation start time.
     *
     * @example 2021-12-29T06:48:56Z
     *
     * @var string
     */
    public $operationStartTime;

    /**
     * @description The outputs returned from creating the service instance.
     *
     *   If the service is deployed by using a ROS template, all output fields of the template are returned.
     *   If the service is deployed by calling an SPI operation, the output fields of the service provider and for the Compute Nest additional features are returned.
     *
     * @example {"InstanceIds":["i-hp38ofxl0dsyfi7z****"]}
     *
     * @var string
     */
    public $outputs;

    /**
     * @description The parameters configured for the service instance.
     *
     * @example {"param":"value"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The billing method of the instance for market. Valid values:
     *
     *   Permanent: Permanent purchase
     *   Subscription: Subscription.
     *   PayAsYouGo: Pay-as-you-go.
     *   CustomFixTime: Merchant custom fixed duration.
     *
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @description The package name.
     *
     * @example 套餐一
     *
     * @var string
     */
    public $predefinedParameterName;

    /**
     * @description The deployment progress of the service instance. Unit: percentage.
     *
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @description The request ID.
     *
     * @example 4DB0F536-B3BE-4F0D-BD29-E83FB56D550C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resources.
     *
     * @example [{"StackId": "stack-xxx"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The information about the service to which the service instance belongs.
     *
     * @var service
     */
    public $service;

    /**
     * @description The ID of the service instance.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The type of the service. Valid values:
     *
     * - operation: The service is a hosted O&M service.
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The source of the serviceInstance. Valid values:
     * - Supplier
     * @example User
     *
     * @var string
     */
    public $source;

    /**
     * @description The deploy status of the serviceInstance. Valid values:
     * - DeletedFailed
     * @example Deployed
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of the deployment state of the service instance.
     *
     * @example deploy successfully
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @description The Alibaba Cloud account ID of the service provider.
     *
     * @example 158927391332*****
     *
     * @var int
     */
    public $supplierUid;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The template name.
     *
     * @example 模板1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The time when the serviceInstance  was last updated.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The AliUid of the user.
     *
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
        'grafanaDashBoardUrl'       => 'GrafanaDashBoardUrl',
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
        if (null !== $this->grafanaDashBoardUrl) {
            $res['GrafanaDashBoardUrl'] = $this->grafanaDashBoardUrl;
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
        if (isset($map['GrafanaDashBoardUrl'])) {
            $model->grafanaDashBoardUrl = $map['GrafanaDashBoardUrl'];
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
