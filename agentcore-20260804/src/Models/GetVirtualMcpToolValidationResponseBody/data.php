<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetVirtualMcpToolValidationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetVirtualMcpToolValidationResponseBody\data\items;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $failureCode;

    /**
     * @var string
     */
    public $failureMessage;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $validationId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'failureCode' => 'failureCode',
        'failureMessage' => 'failureMessage',
        'finishedAt' => 'finishedAt',
        'items' => 'items',
        'status' => 'status',
        'validationId' => 'validationId',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->failureCode) {
            $res['failureCode'] = $this->failureCode;
        }

        if (null !== $this->failureMessage) {
            $res['failureMessage'] = $this->failureMessage;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->validationId) {
            $res['validationId'] = $this->validationId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['failureCode'])) {
            $model->failureCode = $map['failureCode'];
        }

        if (isset($map['failureMessage'])) {
            $model->failureMessage = $map['failureMessage'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['validationId'])) {
            $model->validationId = $map['validationId'];
        }

        return $model;
    }
}
