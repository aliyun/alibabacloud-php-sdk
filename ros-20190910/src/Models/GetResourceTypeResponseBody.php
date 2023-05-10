<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @description The properties of the resource.
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @example v1
     *
     * @var string
     */
    public $defaultVersionId;

    /**
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @example Resource
     *
     * @var string
     */
    public $entityType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @example v10
     *
     * @var string
     */
    public $latestVersionId;

    /**
     * @description Indicates whether the resource supports scratch detection. Default value: false. Valid values:
     *
     *   true: Scratch detection is supported.
     *   false: Scratch detection is not supported.
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @example ROS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The type of the resource.
     *
     * @example A28FBA2E-B6B3-5822-AA45-AB875EF23641
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the resource supports drift detection. Default value: false. Valid values:
     *
     *   true: Drift detection is supported.
     *   false: Drift detection is not supported.
     *
     * @example ALIYUN::ROS::WaitConditionHandle
     *
     * @var string
     */
    public $resourceType;

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
    public $supportDriftDetection;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportScratchDetection;

    /**
     * @example {"ROSTemplateFormatVersion":"2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalVersionCount;

    /**
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
