<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class assignedTo extends Model
{
    /**
     * @example 134xxx343xxxxx
     *
     * @var string
     */
    public $assignIdentifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 3c2253c22xxxxxxxx53a
     *
     * @var string
     */
    public $tbRoleId;
    protected $_name = [
        'assignIdentifier' => 'assignIdentifier',
        'name'             => 'name',
        'tbRoleId'         => 'tbRoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignIdentifier) {
            $res['assignIdentifier'] = $this->assignIdentifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->tbRoleId) {
            $res['tbRoleId'] = $this->tbRoleId;
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
        if (isset($map['assignIdentifier'])) {
            $model->assignIdentifier = $map['assignIdentifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['tbRoleId'])) {
            $model->tbRoleId = $map['tbRoleId'];
        }

        return $model;
    }
}
