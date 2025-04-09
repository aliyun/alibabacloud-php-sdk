<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class dialogueList extends Model
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
     * @var bool
     */
    public $hangUpDialog;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $intentCode;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
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
        'hangUpDialog' => 'hangUpDialog',
        'id' => 'id',
        'intentCode' => 'intentCode',
        'intentName' => 'intentName',
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

        if (null !== $this->hangUpDialog) {
            $res['hangUpDialog'] = $this->hangUpDialog;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->intentCode) {
            $res['intentCode'] = $this->intentCode;
        }

        if (null !== $this->intentName) {
            $res['intentName'] = $this->intentName;
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

        if (isset($map['hangUpDialog'])) {
            $model->hangUpDialog = $map['hangUpDialog'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['intentCode'])) {
            $model->intentCode = $map['intentCode'];
        }

        if (isset($map['intentName'])) {
            $model->intentName = $map['intentName'];
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
