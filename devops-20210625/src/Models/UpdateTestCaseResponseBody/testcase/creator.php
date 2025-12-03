<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Dara\Model;

class creator extends Model
{
    /**
     * @var string
     */
    public $createIdentifier;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createIdentifier' => 'createIdentifier',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createIdentifier) {
            $res['createIdentifier'] = $this->createIdentifier;
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
        if (isset($map['createIdentifier'])) {
            $model->createIdentifier = $map['createIdentifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
