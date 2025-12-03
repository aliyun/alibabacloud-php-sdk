<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Dara\Model;

class assignedTo extends Model
{
    /**
     * @var string
     */
    public $assignIdentifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tbRoleId;
    protected $_name = [
        'assignIdentifier' => 'assignIdentifier',
        'name' => 'name',
        'tbRoleId' => 'tbRoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
