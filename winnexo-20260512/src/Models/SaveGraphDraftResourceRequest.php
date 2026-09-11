<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SaveGraphDraftResourceRequest extends Model
{
    /**
     * @var string
     */
    public $elementType;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $yamlEdit;
    protected $_name = [
        'elementType' => 'elementType',
        'graphName' => 'graphName',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
        'tenantId' => 'tenantId',
        'yamlEdit' => 'yamlEdit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elementType) {
            $res['elementType'] = $this->elementType;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->yamlEdit) {
            $res['yamlEdit'] = $this->yamlEdit;
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
        if (isset($map['elementType'])) {
            $model->elementType = $map['elementType'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['yamlEdit'])) {
            $model->yamlEdit = $map['yamlEdit'];
        }

        return $model;
    }
}
