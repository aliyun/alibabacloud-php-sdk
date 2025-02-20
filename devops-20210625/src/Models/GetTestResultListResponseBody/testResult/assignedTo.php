<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult;

use AlibabaCloud\Dara\Model;

class assignedTo extends Model
{
    /**
     * @var string
     */
    public $assignedToIdenttifier;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'assignedToIdenttifier' => 'assignedToIdenttifier',
        'name'                  => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedToIdenttifier) {
            $res['assignedToIdenttifier'] = $this->assignedToIdenttifier;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['assignedToIdenttifier'])) {
            $model->assignedToIdenttifier = $map['assignedToIdenttifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
