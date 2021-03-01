<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneResponseBody\data\swimmingLaneAppRelationShipList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $entryRule;

    /**
     * @var string
     */
    public $appInfos;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var swimmingLaneAppRelationShipList[]
     */
    public $swimmingLaneAppRelationShipList;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'namespaceId'                     => 'NamespaceId',
        'groupId'                         => 'GroupId',
        'entryRule'                       => 'EntryRule',
        'appInfos'                        => 'AppInfos',
        'tag'                             => 'Tag',
        'name'                            => 'Name',
        'swimmingLaneAppRelationShipList' => 'SwimmingLaneAppRelationShipList',
        'id'                              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->entryRule) {
            $res['EntryRule'] = $this->entryRule;
        }
        if (null !== $this->appInfos) {
            $res['AppInfos'] = $this->appInfos;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->swimmingLaneAppRelationShipList) {
            $res['SwimmingLaneAppRelationShipList'] = [];
            if (null !== $this->swimmingLaneAppRelationShipList && \is_array($this->swimmingLaneAppRelationShipList)) {
                $n = 0;
                foreach ($this->swimmingLaneAppRelationShipList as $item) {
                    $res['SwimmingLaneAppRelationShipList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['EntryRule'])) {
            $model->entryRule = $map['EntryRule'];
        }
        if (isset($map['AppInfos'])) {
            $model->appInfos = $map['AppInfos'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SwimmingLaneAppRelationShipList'])) {
            if (!empty($map['SwimmingLaneAppRelationShipList'])) {
                $model->swimmingLaneAppRelationShipList = [];
                $n                                      = 0;
                foreach ($map['SwimmingLaneAppRelationShipList'] as $item) {
                    $model->swimmingLaneAppRelationShipList[$n++] = null !== $item ? swimmingLaneAppRelationShipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
