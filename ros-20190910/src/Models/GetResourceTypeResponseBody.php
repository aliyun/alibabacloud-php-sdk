<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @var bool
     */
    public $supportDriftDetection;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var mixed[]
     */
    public $attributes;
    protected $_name = [
        'supportDriftDetection' => 'SupportDriftDetection',
        'resourceType'          => 'ResourceType',
        'requestId'             => 'RequestId',
        'properties'            => 'Properties',
        'attributes'            => 'Attributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportDriftDetection) {
            $res['SupportDriftDetection'] = $this->supportDriftDetection;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
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
        if (isset($map['SupportDriftDetection'])) {
            $model->supportDriftDetection = $map['SupportDriftDetection'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }

        return $model;
    }
}
