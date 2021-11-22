<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string[]
     */
    public $requiredBy;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var mixed[]
     */
    public $stack;
    protected $_name = [
        'description'       => 'Description',
        'logicalResourceId' => 'LogicalResourceId',
        'properties'        => 'Properties',
        'requiredBy'        => 'RequiredBy',
        'resourceType'      => 'ResourceType',
        'stack'             => 'Stack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->requiredBy) {
            $res['RequiredBy'] = $this->requiredBy;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['RequiredBy'])) {
            if (!empty($map['RequiredBy'])) {
                $model->requiredBy = $map['RequiredBy'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }

        return $model;
    }
}
