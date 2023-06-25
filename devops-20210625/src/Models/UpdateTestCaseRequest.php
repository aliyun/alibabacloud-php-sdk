<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseRequest\updateWorkitemPropertyRequest;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateWorkitemPropertyRequest) {
            $res['updateWorkitemPropertyRequest'] = [];
            if (null !== $this->updateWorkitemPropertyRequest && \is_array($this->updateWorkitemPropertyRequest)) {
                $n = 0;
                foreach ($this->updateWorkitemPropertyRequest as $item) {
                    $res['updateWorkitemPropertyRequest'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTestCaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['updateWorkitemPropertyRequest'])) {
            if (!empty($map['updateWorkitemPropertyRequest'])) {
                $model->updateWorkitemPropertyRequest = [];
                $n                                    = 0;
                foreach ($map['updateWorkitemPropertyRequest'] as $item) {
                    $model->updateWorkitemPropertyRequest[$n++] = null !== $item ? updateWorkitemPropertyRequest::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
