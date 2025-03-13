<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class creator extends Model
{
    /**
     * @example 134xxx343xxxxx
     *
     * @var string
     */
    public $createIdentifier;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createIdentifier' => 'createIdentifier',
        'name'             => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return creator
     */
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
