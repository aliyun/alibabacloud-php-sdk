<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @description The type of the resource.
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @description The creation time. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The default version ID.
     *
     * > This parameter is returned only if the resource type is queried.
     * @example v1
     *
     * @var string
     */
    public $defaultVersionId;

    /**
     * @description The description of the resource type.
     *
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @description The entity type. Valid values:
     *
     *   Resource: regular resource. For more information, see [Resources](~~28863~~).
     *   DataSource: DataSource resource. For more information, see [DataSource resources](~~404753~~).
     *   module: module.
     *
     * @example Resource
     *
     * @var string
     */
    public $entityType;

    /**
     * @description Indicates whether the version is the default version. Valid values:
     *
     *   true
     *   false
     *
     * > This parameter is returned only if a specific version of the resource type is queried.
     * @example true
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @description The latest version ID.
     *
     * > This parameter is returned only if the resource type is queried.
     * @example v10
     *
     * @var string
     */
    public $latestVersionId;

    /**
     * @description Indicates whether the resource supports drift detection. Default value: false. Valid values:
     *
     *   true: Drift detection is supported.
     *   false: Drift detection is not supported.
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @description The provider of the resource type. Valid values:
     *
     *   ROS: The resource type is provided by Resource Orchestration Service (ROS).
     *   Self: The resource type is provided by you.
     *
     * @example ROS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The attributes of the resource.
     *
     * @example A28FBA2E-B6B3-5822-AA45-AB875EF23641
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The properties of the resource.
     *
     * @example ALIYUN::ROS::WaitConditionHandle
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Indicates whether the resource supports scratch detection. Default value: false. Valid values:
     *
     *   true: Scratch detection is supported.
     *   false: Scratch detection is not supported.
     *
     * @example false
     *
     * @var bool
     */
    public $supportDriftDetection;

    /**
     * @description The entity type. Valid values:
     *
     *   Resource: resources other than DataSource resources. For more information, see [Resources](~~28863~~).
     *   DataSource: DataSource resources.
     *
     * @example false
     *
     * @var bool
     */
    public $supportScratchDetection;

    /**
     * @description The template content in the module.
     *
     * > This parameter is returned only if a specific version of the resource type is queried.
     * @example {"ROSTemplateFormatVersion":"2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The total number of versions.
     *
     * > This parameter is returned only if the resource type is queried.
     * @example 10
     *
     * @var int
     */
    public $totalVersionCount;

    /**
     * @description The update time. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'attributes'              => 'Attributes',
        'createTime'              => 'CreateTime',
        'defaultVersionId'        => 'DefaultVersionId',
        'description'             => 'Description',
        'entityType'              => 'EntityType',
        'isDefaultVersion'        => 'IsDefaultVersion',
        'latestVersionId'         => 'LatestVersionId',
        'properties'              => 'Properties',
        'provider'                => 'Provider',
        'requestId'               => 'RequestId',
        'resourceType'            => 'ResourceType',
        'supportDriftDetection'   => 'SupportDriftDetection',
        'supportScratchDetection' => 'SupportScratchDetection',
        'templateBody'            => 'TemplateBody',
        'totalVersionCount'       => 'TotalVersionCount',
        'updateTime'              => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultVersionId) {
            $res['DefaultVersionId'] = $this->defaultVersionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->isDefaultVersion) {
            $res['IsDefaultVersion'] = $this->isDefaultVersion;
        }
        if (null !== $this->latestVersionId) {
            $res['LatestVersionId'] = $this->latestVersionId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->supportDriftDetection) {
            $res['SupportDriftDetection'] = $this->supportDriftDetection;
        }
        if (null !== $this->supportScratchDetection) {
            $res['SupportScratchDetection'] = $this->supportScratchDetection;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->totalVersionCount) {
            $res['TotalVersionCount'] = $this->totalVersionCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultVersionId'])) {
            $model->defaultVersionId = $map['DefaultVersionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['IsDefaultVersion'])) {
            $model->isDefaultVersion = $map['IsDefaultVersion'];
        }
        if (isset($map['LatestVersionId'])) {
            $model->latestVersionId = $map['LatestVersionId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SupportDriftDetection'])) {
            $model->supportDriftDetection = $map['SupportDriftDetection'];
        }
        if (isset($map['SupportScratchDetection'])) {
            $model->supportScratchDetection = $map['SupportScratchDetection'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TotalVersionCount'])) {
            $model->totalVersionCount = $map['TotalVersionCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
