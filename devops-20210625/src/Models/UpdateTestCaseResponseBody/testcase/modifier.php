<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Dara\Model;

class modifier extends Model
{
    /**
     * @var string
     */
    public $modifyIdentifier;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'modifyIdentifier' => 'modifyIdentifier',
        'name'             => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyIdentifier) {
            $res['modifyIdentifier'] = $this->modifyIdentifier;
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
        if (isset($map['modifyIdentifier'])) {
            $model->modifyIdentifier = $map['modifyIdentifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
