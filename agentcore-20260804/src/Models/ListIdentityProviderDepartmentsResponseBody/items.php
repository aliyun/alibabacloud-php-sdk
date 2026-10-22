<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProviderDepartmentsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $hasChildren;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $memberCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentId;
    protected $_name = [
        'hasChildren' => 'hasChildren',
        'id' => 'id',
        'memberCount' => 'memberCount',
        'name' => 'name',
        'parentId' => 'parentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasChildren) {
            $res['hasChildren'] = $this->hasChildren;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->memberCount) {
            $res['memberCount'] = $this->memberCount;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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
        if (isset($map['hasChildren'])) {
            $model->hasChildren = $map['hasChildren'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['memberCount'])) {
            $model->memberCount = $map['memberCount'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}
