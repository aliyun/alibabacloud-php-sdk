<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class assignedTo extends Model
{
    /**
     * @example 1316xxxxxx8624xxx
     *
     * @var string
     */
    public $assignIdentifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @example xxxxxxxewdds12xxx
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
