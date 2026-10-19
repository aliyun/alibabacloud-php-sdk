<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListWorkflowInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $initiator;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'businessId' => 'businessId',
        'collaborationGroupId' => 'collaborationGroupId',
        'initiator' => 'initiator',
        'keyword' => 'keyword',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'sortBy' => 'sortBy',
        'sortOrder' => 'sortOrder',
        'status' => 'status',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['businessId'] = $this->businessId;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }

        if (null !== $this->sortOrder) {
            $res['sortOrder'] = $this->sortOrder;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['businessId'])) {
            $model->businessId = $map['businessId'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }

        if (isset($map['sortOrder'])) {
            $model->sortOrder = $map['sortOrder'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
