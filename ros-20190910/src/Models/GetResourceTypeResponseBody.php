<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var mixed[]
     */
    public $properties;

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
