<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\service;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\tags;

class GetServiceInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizStatus;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var bool
     */
    public $enableInstanceOps;
    /**
     * @var bool
     */
    public $enableUserPrometheus;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $grafanaDashBoardUrl;
    /**
     * @var bool
     */
    public $isOperated;
    /**
     * @var string
     */
    public $licenseMetadata;
    /**
     * @var string
     */
    public $name;
    /**
     * @var networkConfig
     */
    public $networkConfig;
    /**
     * @var string
     */
    public $operatedServiceInstanceId;
    /**
     * @var string
     */
    public $operationEndTime;
    /**
     * @var string
     */
    public $operationExtraInfo;
    /**
     * @var string
     */
    public $operationStartTime;
    /**
     * @var string
     */
    public $outputs;
    /**
     * @var string
     */
    public $parameters;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var string
     */
    public $predefinedParameterName;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var string
     */
    public $rdAccountLoginUrl;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resources;
    /**
     * @var service
     */
    public $service;
    /**
     * @var string
     */
    public $serviceInstanceId;
    /**
     * @var string
     */
    public $serviceType;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusDetail;
    /**
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
     * @var string
     */
    public $updateTime;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'bizStatus'                 => 'BizStatus',
        'createTime'                => 'CreateTime',
        'enableInstanceOps'         => 'EnableInstanceOps',
        'enableUserPrometheus'      => 'EnableUserPrometheus',
        'endTime'                   => 'EndTime',
        'grafanaDashBoardUrl'       => 'GrafanaDashBoardUrl',
        'isOperated'                => 'IsOperated',
        'licenseMetadata'           => 'LicenseMetadata',
        'name'                      => 'Name',
        'networkConfig'             => 'NetworkConfig',
        'operatedServiceInstanceId' => 'OperatedServiceInstanceId',
        'operationEndTime'          => 'OperationEndTime',
        'operationExtraInfo'        => 'OperationExtraInfo',
        'operationStartTime'        => 'OperationStartTime',
        'outputs'                   => 'Outputs',
        'parameters'                => 'Parameters',
        'payType'                   => 'PayType',
        'predefinedParameterName'   => 'PredefinedParameterName',
        'progress'                  => 'Progress',
        'rdAccountLoginUrl'         => 'RdAccountLoginUrl',
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
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        if (null !== $this->service) {
            $this->service->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->licenseMetadata) {
            $res['LicenseMetadata'] = $this->licenseMetadata;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkConfig) {
            $res['NetworkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
        }

        if (null !== $this->operatedServiceInstanceId) {
            $res['OperatedServiceInstanceId'] = $this->operatedServiceInstanceId;
        }

        if (null !== $this->operationEndTime) {
            $res['OperationEndTime'] = $this->operationEndTime;
        }

        if (null !== $this->operationExtraInfo) {
            $res['OperationExtraInfo'] = $this->operationExtraInfo;
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

        if (null !== $this->rdAccountLoginUrl) {
            $res['RdAccountLoginUrl'] = $this->rdAccountLoginUrl;
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
            $res['Service'] = null !== $this->service ? $this->service->toArray($noStream) : $this->service;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['LicenseMetadata'])) {
            $model->licenseMetadata = $map['LicenseMetadata'];
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

        if (isset($map['OperationExtraInfo'])) {
            $model->operationExtraInfo = $map['OperationExtraInfo'];
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

        if (isset($map['RdAccountLoginUrl'])) {
            $model->rdAccountLoginUrl = $map['RdAccountLoginUrl'];
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
