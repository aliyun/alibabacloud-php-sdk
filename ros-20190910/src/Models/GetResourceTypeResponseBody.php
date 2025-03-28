<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultVersionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @var string
     */
    public $latestVersionId;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var bool
     */
    public $supportDriftDetection;

    /**
     * @var bool
     */
    public $supportScratchDetection;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var int
     */
    public $totalVersionCount;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'attributes' => 'Attributes',
        'createTime' => 'CreateTime',
        'defaultVersionId' => 'DefaultVersionId',
        'description' => 'Description',
        'entityType' => 'EntityType',
        'isDefaultVersion' => 'IsDefaultVersion',
        'latestVersionId' => 'LatestVersionId',
        'properties' => 'Properties',
        'provider' => 'Provider',
        'requestId' => 'RequestId',
        'resourceType' => 'ResourceType',
        'supportDriftDetection' => 'SupportDriftDetection',
        'supportScratchDetection' => 'SupportScratchDetection',
        'templateBody' => 'TemplateBody',
        'totalVersionCount' => 'TotalVersionCount',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
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
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
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
