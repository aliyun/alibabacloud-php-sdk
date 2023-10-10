<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateSwimmingLaneResponseBody\data\swimmingLaneAppRelationShipList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The rule of the lane.
     *
     * @example [{\"condition\":\"AND\",\"enable\":true,\"path\":\"/traffictest\",\"priority\":1,\"restItems\":[{\"cond\":\"==\",\"datum\":\"testheadervalue\",\"name\":\"testheader\",\"operator\":\"rawvalue\",\"type\":\"header\",\"value\":\"testheadervalue\"}]}]"
     *
     * @var string
     */
    public $entryRule;

    /**
     * @description The ID of the lane group.
     *
     * @example 171
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the lane.
     *
     * @example 321
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the lane.
     *
     * @example test-swimlane
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-beijing:qa
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The list of associations between the lane and the related application.
     *
     * @var swimmingLaneAppRelationShipList[]
     */
    public $swimmingLaneAppRelationShipList;

    /**
     * @description The tag of the lane.
     *
     * @example 2cb6b8a
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'entryRule'                       => 'EntryRule',
        'groupId'                         => 'GroupId',
        'id'                              => 'Id',
        'name'                            => 'Name',
        'namespaceId'                     => 'NamespaceId',
        'swimmingLaneAppRelationShipList' => 'SwimmingLaneAppRelationShipList',
        'tag'                             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SwimmingLaneAppRelationShipList'] = [];
            if (null !== $this->swimmingLaneAppRelationShipList && \is_array($this->swimmingLaneAppRelationShipList)) {
                $n = 0;
                foreach ($this->swimmingLaneAppRelationShipList as $item) {
                    $res['SwimmingLaneAppRelationShipList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
                $n                                      = 0;
                foreach ($map['SwimmingLaneAppRelationShipList'] as $item) {
                    $model->swimmingLaneAppRelationShipList[$n++] = null !== $item ? swimmingLaneAppRelationShipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
