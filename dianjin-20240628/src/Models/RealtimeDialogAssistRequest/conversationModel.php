<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistRequest;

use AlibabaCloud\Dara\Model;

class conversationModel extends Model
{
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
    public $role;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'content',
        'customerId' => 'customerId',
        'customerServiceId' => 'customerServiceId',
        'customerServiceType' => 'customerServiceType',
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

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
