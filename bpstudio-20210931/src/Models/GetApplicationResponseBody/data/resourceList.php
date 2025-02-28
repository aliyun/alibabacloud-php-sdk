<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;

use AlibabaCloud\Dara\Model;

class resourceList extends Model
{
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $lifecycle;
    /**
     * @var string
     */
    public $nodeLabel;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $resourceCode;
    /**
     * @var string
     */
    public $resourceId;
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
    public $status;
    protected $_name = [
        'chargeType'   => 'ChargeType',
        'lifecycle'    => 'Lifecycle',
        'nodeLabel'    => 'NodeLabel',
        'remark'       => 'Remark',
        'resourceCode' => 'ResourceCode',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
        'status'       => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->nodeLabel) {
            $res['NodeLabel'] = $this->nodeLabel;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['NodeLabel'])) {
            $model->nodeLabel = $map['NodeLabel'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
