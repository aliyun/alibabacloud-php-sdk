<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $action;

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
     * @var string
     */
    public $replacement;

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
        'action'            => 'Action',
        'description'       => 'Description',
        'logicalResourceId' => 'LogicalResourceId',
        'properties'        => 'Properties',
        'replacement'       => 'Replacement',
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
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->replacement) {
            $res['Replacement'] = $this->replacement;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Replacement'])) {
            $model->replacement = $map['Replacement'];
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
