<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseRequest\updateWorkitemPropertyRequest;

class UpdateTestCaseRequest extends Model
{
    /**
     * @var updateWorkitemPropertyRequest[]
     */
    public $updateWorkitemPropertyRequest;
    protected $_name = [
        'updateWorkitemPropertyRequest' => 'updateWorkitemPropertyRequest',
    ];

    public function validate()
    {
        if (\is_array($this->updateWorkitemPropertyRequest)) {
            Model::validateArray($this->updateWorkitemPropertyRequest);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateWorkitemPropertyRequest) {
            if (\is_array($this->updateWorkitemPropertyRequest)) {
                $res['updateWorkitemPropertyRequest'] = [];
                $n1                                   = 0;
                foreach ($this->updateWorkitemPropertyRequest as $item1) {
                    $res['updateWorkitemPropertyRequest'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['updateWorkitemPropertyRequest'])) {
            if (!empty($map['updateWorkitemPropertyRequest'])) {
                $model->updateWorkitemPropertyRequest = [];
                $n1                                   = 0;
                foreach ($map['updateWorkitemPropertyRequest'] as $item1) {
                    $model->updateWorkitemPropertyRequest[$n1++] = updateWorkitemPropertyRequest::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
