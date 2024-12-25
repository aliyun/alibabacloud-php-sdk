<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogRequest;

use AlibabaCloud\Tea\Model;

class conversationModel extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $begin;

    /**
     * @example 2024-11-08 09:51:16
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @example 98457834685635
     *
     * @var string
     */
    public $customerId;

    /**
     * @example 1374683645635
     *
     * @var string
     */
    public $customerServiceId;

    /**
     * @example 0
     *
     * @var string
     */
    public $customerServiceType;

    /**
     * @example 10
     *
     * @var int
     */
    public $end;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @example audio
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'begin'               => 'begin',
        'beginTime'           => 'beginTime',
        'content'             => 'content',
        'customerId'          => 'customerId',
        'customerServiceId'   => 'customerServiceId',
        'customerServiceType' => 'customerServiceType',
        'end'                 => 'end',
        'role'                => 'role',
        'type'                => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->begin) {
            $res['begin'] = $this->begin;
        }
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->customerId) {
            $res['customerId'] = $this->customerId;
        }
        if (null !== $this->customerServiceId) {
            $res['customerServiceId'] = $this->customerServiceId;
        }
        if (null !== $this->customerServiceType) {
            $res['customerServiceType'] = $this->customerServiceType;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversationModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['begin'])) {
            $model->begin = $map['begin'];
        }
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['customerId'])) {
            $model->customerId = $map['customerId'];
        }
        if (isset($map['customerServiceId'])) {
            $model->customerServiceId = $map['customerServiceId'];
        }
        if (isset($map['customerServiceType'])) {
            $model->customerServiceType = $map['customerServiceType'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
