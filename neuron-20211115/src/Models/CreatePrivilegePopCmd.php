<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CreatePrivilegePopCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $actions;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'accountId' => 'accountId',
        'actions' => 'actions',
        'resource' => 'resource',
        'roleId' => 'roleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }

        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }

        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['actions'])) {
            $model->actions = $map['actions'];
        }

        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        if (isset($map['roleId'])) {
            $model->roleId = $map['roleId'];
        }

        return $model;
    }
}
