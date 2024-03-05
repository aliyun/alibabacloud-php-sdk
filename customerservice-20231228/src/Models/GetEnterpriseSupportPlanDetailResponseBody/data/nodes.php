<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data;

use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes\docNode;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes\finishNode;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes\freeOrderAuditNode;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes\freeOrderNode;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes\orderNode;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\nodes\serviceImplementation;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var docNode
     */
    public $docNode;

    /**
     * @var finishNode
     */
    public $finishNode;

    /**
     * @var freeOrderAuditNode
     */
    public $freeOrderAuditNode;

    /**
     * @var freeOrderNode
     */
    public $freeOrderNode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $orderDate;

    /**
     * @var orderNode
     */
    public $orderNode;

    /**
     * @var serviceImplementation
     */
    public $serviceImplementation;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'docNode'               => 'docNode',
        'finishNode'            => 'finishNode',
        'freeOrderAuditNode'    => 'freeOrderAuditNode',
        'freeOrderNode'         => 'freeOrderNode',
        'name'                  => 'name',
        'orderDate'             => 'orderDate',
        'orderNode'             => 'orderNode',
        'serviceImplementation' => 'serviceImplementation',
        'status'                => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docNode) {
            $res['docNode'] = null !== $this->docNode ? $this->docNode->toMap() : null;
        }
        if (null !== $this->finishNode) {
            $res['finishNode'] = null !== $this->finishNode ? $this->finishNode->toMap() : null;
        }
        if (null !== $this->freeOrderAuditNode) {
            $res['freeOrderAuditNode'] = null !== $this->freeOrderAuditNode ? $this->freeOrderAuditNode->toMap() : null;
        }
        if (null !== $this->freeOrderNode) {
            $res['freeOrderNode'] = null !== $this->freeOrderNode ? $this->freeOrderNode->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->orderDate) {
            $res['orderDate'] = $this->orderDate;
        }
        if (null !== $this->orderNode) {
            $res['orderNode'] = null !== $this->orderNode ? $this->orderNode->toMap() : null;
        }
        if (null !== $this->serviceImplementation) {
            $res['serviceImplementation'] = null !== $this->serviceImplementation ? $this->serviceImplementation->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docNode'])) {
            $model->docNode = docNode::fromMap($map['docNode']);
        }
        if (isset($map['finishNode'])) {
            $model->finishNode = finishNode::fromMap($map['finishNode']);
        }
        if (isset($map['freeOrderAuditNode'])) {
            $model->freeOrderAuditNode = freeOrderAuditNode::fromMap($map['freeOrderAuditNode']);
        }
        if (isset($map['freeOrderNode'])) {
            $model->freeOrderNode = freeOrderNode::fromMap($map['freeOrderNode']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['orderDate'])) {
            $model->orderDate = $map['orderDate'];
        }
        if (isset($map['orderNode'])) {
            $model->orderNode = orderNode::fromMap($map['orderNode']);
        }
        if (isset($map['serviceImplementation'])) {
            $model->serviceImplementation = serviceImplementation::fromMap($map['serviceImplementation']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
