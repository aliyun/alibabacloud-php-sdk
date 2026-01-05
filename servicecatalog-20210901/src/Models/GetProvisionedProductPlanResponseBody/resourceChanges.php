<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody;

use AlibabaCloud\Dara\Model;

class resourceChanges extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @var string
     */
    public $replacement;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'action' => 'Action',
        'logicalResourceId' => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'replacement' => 'Replacement',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
