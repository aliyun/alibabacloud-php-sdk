<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\service;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\tags;
use AlibabaCloud\Tea\Model;

class serviceInstances extends Model
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
     * @description The time when the service instance was created.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the service instance supports the hosted O\\&M feature. Valid values:
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
     * @description The time when the service instance expires.
     *
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the Alibaba Cloud Marketplace instance.
     *
     * @example 5827****
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
     * @description The ID of the managed service instance.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $operatedServiceInstanceId;

    /**
     * @description The end of the time range during which hosted O\\&M is implemented.
     *
     * @example 2022-01-28T06:48:56Z
     *
     * @var string
     */
    public $operationEndTime;

    /**
     * @description The beginning of the time range during which hosted O\\&M is implemented.
     *
     * @example 2021-12-29T06:48:56Z
     *
     * @var string
     */
    public $operationStartTime;

    /**
     * @description The order ID.
     *
     * @example 2306175xxxxxxxx
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The information returned after the service instance is created.
     *
     * @example {"managementUrl": "http://xx.xx"}
     *
     * @var string
     */
    public $outputs;

    /**
     * @description The parameters of the service instance.
     *
     * @example {"param":"value"}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The billing method. Valid values:
     *
     *   Permanent: Once you purchase the service, you can use it permanently.
     *   Subscription: You purchase the service from Alibaba Cloud Marketplace and are charged for the service on a subscription basis.
     *   PayAsYouGo: You purchase the service from Alibaba Cloud Marketplace and are charged for the service on a pay-as-you-go basis.
     *   CustomFixTime: You are charged for the service based on a custom duration fixed by the service provider.
     *
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @description The deployment progress of the service instance, in percentage.
     *
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @description The resource group ID.
     *
     * @example rg-aekz6scpcxxxxxx
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
     * @description The services.
     *
     * @var service
     */
    public $service;

    /**
     * @description The service instance ID.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The type of the service. Valid values:
     *
     *   private: The service is a private service and is deployed within the account of a customer.
     *   managed: The service is a fully managed service and is deployed within the account of a service provider.
     *   operation: The service is a hosted O\\&M service.
     *   poc: The service is a trial service.
     *
     * @example private
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The source from which the service instance is created.
     *
     * @example Supplier
     *
     * @var string
     */
    public $source;

    /**
     * @description The state of the service instance. Valid values:
     *
     *   Created
     *   Deploying
     *   DeployedFailed
     *   Deployed
     *   Upgrading
     *   Deleting
     *   Deleted
     *   DeletedFailed
     *
     * @example Deployed
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of the deployment of the service instance.
     *
     * @example deploy successfully
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @description Is it supported to convert from trial to formal
     *
     * @example true
     *
     * @var bool
     */
    public $supportTrialToPrivate;

    /**
     * @description The custom tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The template name.
     *
     * @example Single ECS
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The time when the service instance was updated.
     *
     * @example 2021-05-20T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'bizStatus' => 'BizStatus',
        'createTime' => 'CreateTime',
        'enableInstanceOps' => 'EnableInstanceOps',
        'endTime' => 'EndTime',
        'marketInstanceId' => 'MarketInstanceId',
        'name' => 'Name',
        'operatedServiceInstanceId' => 'OperatedServiceInstanceId',
        'operationEndTime' => 'OperationEndTime',
        'operationStartTime' => 'OperationStartTime',
        'orderId' => 'OrderId',
        'outputs' => 'Outputs',
        'parameters' => 'Parameters',
        'payType' => 'PayType',
        'progress' => 'Progress',
        'resourceGroupId' => 'ResourceGroupId',
        'resources' => 'Resources',
        'service' => 'Service',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceType' => 'ServiceType',
        'source' => 'Source',
        'status' => 'Status',
        'statusDetail' => 'StatusDetail',
        'supportTrialToPrivate' => 'SupportTrialToPrivate',
        'tags' => 'Tags',
        'templateName' => 'TemplateName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableInstanceOps) {
            $res['EnableInstanceOps'] = $this->enableInstanceOps;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->marketInstanceId) {
            $res['MarketInstanceId'] = $this->marketInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (null !== $this->supportTrialToPrivate) {
            $res['SupportTrialToPrivate'] = $this->supportTrialToPrivate;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableInstanceOps'])) {
            $model->enableInstanceOps = $map['EnableInstanceOps'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MarketInstanceId'])) {
            $model->marketInstanceId = $map['MarketInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
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
        if (isset($map['SupportTrialToPrivate'])) {
            $model->supportTrialToPrivate = $map['SupportTrialToPrivate'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
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

        return $model;
    }
}
