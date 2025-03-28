<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogRequest;

use AlibabaCloud\Dara\Model;

class conversationModel extends Model
{
    /**
     * @var int
     */
    public $begin;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $customerServiceId;

    /**
     * @var string
     */
    public $customerServiceType;

    /**
     * @var int
     */
    public $end;

    /**
     * @var int
     */
    public $role;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'begin' => 'begin',
        'beginTime' => 'beginTime',
        'content' => 'content',
        'customerId' => 'customerId',
        'customerServiceId' => 'customerServiceId',
        'customerServiceType' => 'customerServiceType',
        'end' => 'end',
        'role' => 'role',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
