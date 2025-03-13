<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class modifier extends Model
{
    /**
     * @example 1316xxxxxx8624xxx
     *
     * @var string
     */
    public $modifyIdentifier;

    /**
     * @example xxxxxxx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'modifyIdentifier' => 'modifyIdentifier',
        'name'             => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return modifier
     */
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
