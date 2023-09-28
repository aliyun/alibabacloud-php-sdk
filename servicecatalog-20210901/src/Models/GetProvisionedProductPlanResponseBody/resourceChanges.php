<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody;

use AlibabaCloud\Tea\Model;

class resourceChanges extends Model
{
    /**
     * @description The action that is performed on the resource. Valid values:
     *
     *   Add
     *   Modify
     *   Remove
     *   None
     *
     * @example Add
     *
     * @var string
     */
    public $action;

    /**
     * @description The logical ID of the resource.
     *
     * @example instance
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The physical ID of the resource.
     *
     * > This parameter is returned only when Action is set to Modify or Remove.
     * @example i-bp13lmam3qd9q6il****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description Indicates whether a replacement update is performed on the template. Valid values:
     *
     *   True: A replacement update is performed on the template.
     *   False: A change is made on the template.
     *   Conditional: A replacement update may be performed on the template. You can check whether a replacement update is performed when the template is in use.
     *
     * > This parameter is returned only when Action is set to Modify.
     * @example True
     *
     * @var string
     */
    public $replacement;

    /**
     * @description The type of the resource.
     *
     * @example alicloud_instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'action'             => 'Action',
        'logicalResourceId'  => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'replacement'        => 'Replacement',
        'resourceType'       => 'ResourceType',
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
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->replacement) {
            $res['Replacement'] = $this->replacement;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceChanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['Replacement'])) {
            $model->replacement = $map['Replacement'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
