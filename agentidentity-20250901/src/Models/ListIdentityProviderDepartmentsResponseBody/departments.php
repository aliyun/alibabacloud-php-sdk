<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListIdentityProviderDepartmentsResponseBody;

use AlibabaCloud\Dara\Model;

class departments extends Model
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
        'hasChildren' => 'HasChildren',
        'id' => 'Id',
        'memberCount' => 'MemberCount',
        'name' => 'Name',
        'parentId' => 'ParentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasChildren) {
            $res['HasChildren'] = $this->hasChildren;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
        if (isset($map['HasChildren'])) {
            $model->hasChildren = $map['HasChildren'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
