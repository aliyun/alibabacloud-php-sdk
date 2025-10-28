<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneResponseBody\data\swimmingLaneAppRelationShipList;

class data extends Model
{
    /**
     * @var string
     */
    public $entryRule;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var swimmingLaneAppRelationShipList[]
     */
    public $swimmingLaneAppRelationShipList;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'entryRule' => 'EntryRule',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'swimmingLaneAppRelationShipList' => 'SwimmingLaneAppRelationShipList',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->swimmingLaneAppRelationShipList)) {
            Model::validateArray($this->swimmingLaneAppRelationShipList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryRule) {
            $res['EntryRule'] = $this->entryRule;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->swimmingLaneAppRelationShipList) {
            if (\is_array($this->swimmingLaneAppRelationShipList)) {
                $res['SwimmingLaneAppRelationShipList'] = [];
                $n1 = 0;
                foreach ($this->swimmingLaneAppRelationShipList as $item1) {
                    $res['SwimmingLaneAppRelationShipList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['EntryRule'])) {
            $model->entryRule = $map['EntryRule'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SwimmingLaneAppRelationShipList'])) {
            if (!empty($map['SwimmingLaneAppRelationShipList'])) {
                $model->swimmingLaneAppRelationShipList = [];
                $n1 = 0;
                foreach ($map['SwimmingLaneAppRelationShipList'] as $item1) {
                    $model->swimmingLaneAppRelationShipList[$n1] = swimmingLaneAppRelationShipList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
