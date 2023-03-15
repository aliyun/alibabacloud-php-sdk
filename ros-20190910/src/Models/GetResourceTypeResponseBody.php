<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @description The attributes of the resource.
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @description The entity type. Valid values:
     *
     *   Resource: resources other than DataSource resources. For more information, see [Resources](~~28863~~).
     *   DataSource: DataSource resources.
     *
     * @example Resource
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The properties of the resource.
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @description The ID of the request.
     *
     * @example A28FBA2E-B6B3-5822-AA45-AB875EF23641
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the resource.
     *
     * @example ALIYUN::ROS::WaitConditionHandle
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Indicates whether the resource supports drift detection. Default value: false. Valid values:
     *
     *   true: Drift detection is supported.
     *   false: Drift detection is not supported.
     *
     * @example false
     *
     * @var bool
     */
    public $supportDriftDetection;

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
    public $supportScratchDetection;
    protected $_name = [
        'attributes'              => 'Attributes',
        'entityType'              => 'EntityType',
        'properties'              => 'Properties',
        'requestId'               => 'RequestId',
        'resourceType'            => 'ResourceType',
        'supportDriftDetection'   => 'SupportDriftDetection',
        'supportScratchDetection' => 'SupportScratchDetection',
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
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
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
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
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

        return $model;
    }
}
