<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemFieldRequest\updateWorkitemPropertyRequest;
use AlibabaCloud\Tea\Model;

class UpdateWorkitemFieldRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var updateWorkitemPropertyRequest[]
     */
    public $updateWorkitemPropertyRequest;

    /**
     * @description This parameter is required.
     *
     * @example 9144ef6b72d8exxxxx9e61a4d0
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'updateWorkitemPropertyRequest' => 'updateWorkitemPropertyRequest',
        'workitemIdentifier'            => 'workitemIdentifier',
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
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkitemFieldRequest
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
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
