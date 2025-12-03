<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\todoList;

use AlibabaCloud\Dara\Model;

class requirementCheckItems extends Model
{
    /**
     * @var string
     */
    public $itemType;

    /**
     * @var bool
     */
    public $pass;
    protected $_name = [
        'itemType' => 'itemType',
        'pass' => 'pass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
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
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }

        return $model;
    }
}
