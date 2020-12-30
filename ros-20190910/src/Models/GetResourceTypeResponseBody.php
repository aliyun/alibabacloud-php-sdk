<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var bool
     */
    public $supportDriftDetection;
    protected $_name = [
        'requestId'             => 'RequestId',
        'attributes'            => 'Attributes',
        'resourceType'          => 'ResourceType',
        'properties'            => 'Properties',
        'supportDriftDetection' => 'SupportDriftDetection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->supportDriftDetection) {
            $res['SupportDriftDetection'] = $this->supportDriftDetection;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['SupportDriftDetection'])) {
            $model->supportDriftDetection = $map['SupportDriftDetection'];
        }

        return $model;
    }
}
