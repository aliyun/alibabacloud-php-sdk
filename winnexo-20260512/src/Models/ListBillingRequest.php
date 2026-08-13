<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListBillingRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $ignoreZero;

    /**
     * @var string
     */
    public $operation;

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
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $wnUserId;
    protected $_name = [
        'bizId' => 'bizId',
        'bizType' => 'bizType',
        'endTime' => 'endTime',
        'ignoreZero' => 'ignoreZero',
        'operation' => 'operation',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'startTime' => 'startTime',
        'status' => 'status',
        'tenantId' => 'tenantId',
        'wnUserId' => 'wnUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->ignoreZero) {
            $res['ignoreZero'] = $this->ignoreZero;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->wnUserId) {
            $res['wnUserId'] = $this->wnUserId;
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
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['ignoreZero'])) {
            $model->ignoreZero = $map['ignoreZero'];
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['wnUserId'])) {
            $model->wnUserId = $map['wnUserId'];
        }

        return $model;
    }
}
