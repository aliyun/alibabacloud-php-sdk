<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;

use AlibabaCloud\Dara\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $acsResourceType;
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
     * @var string
     */
    public $physicalResourceId;
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
        'acsResourceType'    => 'AcsResourceType',
        'action'             => 'Action',
        'description'        => 'Description',
        'logicalResourceId'  => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'properties'         => 'Properties',
        'replacement'        => 'Replacement',
        'requiredBy'         => 'RequiredBy',
        'resourceType'       => 'ResourceType',
        'stack'              => 'Stack',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->requiredBy)) {
            Model::validateArray($this->requiredBy);
        }
        if (\is_array($this->stack)) {
            Model::validateArray($this->stack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acsResourceType) {
            $res['AcsResourceType'] = $this->acsResourceType;
        }

        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->replacement) {
            $res['Replacement'] = $this->replacement;
        }

        if (null !== $this->requiredBy) {
            if (\is_array($this->requiredBy)) {
                $res['RequiredBy'] = [];
                $n1                = 0;
                foreach ($this->requiredBy as $item1) {
                    $res['RequiredBy'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->stack) {
            if (\is_array($this->stack)) {
                $res['Stack'] = [];
                foreach ($this->stack as $key1 => $value1) {
                    $res['Stack'][$key1] = $value1;
                }
            }
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
        if (isset($map['AcsResourceType'])) {
            $model->acsResourceType = $map['AcsResourceType'];
        }

        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Replacement'])) {
            $model->replacement = $map['Replacement'];
        }

        if (isset($map['RequiredBy'])) {
            if (!empty($map['RequiredBy'])) {
                $model->requiredBy = [];
                $n1                = 0;
                foreach ($map['RequiredBy'] as $item1) {
                    $model->requiredBy[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Stack'])) {
            if (!empty($map['Stack'])) {
                $model->stack = [];
                foreach ($map['Stack'] as $key1 => $value1) {
                    $model->stack[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
