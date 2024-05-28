<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class assignedTo extends Model
{
    /**
     * @example 12xxxxx456
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return assignedTo
     */
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
