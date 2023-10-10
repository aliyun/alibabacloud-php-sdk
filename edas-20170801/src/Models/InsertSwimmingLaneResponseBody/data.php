<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneResponseBody\data\swimmingLaneAppRelationShipList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The applications that are associated with lanes.
     *
     * @example [{"appId":"9dcba109-ee9f-4e67-8916-41
     *******"}]
     *
     * @var string
     */
    public $appInfos;

    /**
     * @description The throttling rule for the lane.
     *
     * condition: the relationship among the conditions to be met.
     *
     *   AND: all conditions
     *   OR: one of the conditions
     *
     * restItems.type: the type of the rule. Valid values:
     *
     *   header: matches by request header.
     *   cookie: matches by request cookie.
     *   param: matches by request parameters.
     *
     * restItems.cond: the condition that matches the rule. Valid values:
     *
     *   "==": The parameter value is equal to the value that you enter in the Value field.
     *   "!=": The parameter value is not equal to the value that you enter in the Value field.
     *   ">": The parameter value is greater than the value that you enter in the Value field.
     *   "<": The parameter value is less than the value that you enter in the Value field.
     *   ">=": The parameter value is greater than or equal to the value that you enter in the Value field.
     *   "<=": The parameter value is less than or equal to the value that you enter in the Value field.
     *   "in": The parameter value is within the values that you enter in the Value field.
     *
     * restItems.operator: the type of the value. Valid values:
     *
     *   rawvalue: the initial value
     *   mod: the reminder obtained by performing modulo operation
     *   list: the value from the list
     *
     * @example [{\"condition\":\"AND\",\"enable\":false,\"path\":\"/traffic\",\"priority\":1,\"restItems\":[{\"cond\":\"==\",\"datum\":\"testvalue\",\"name\":\"testheader\",\"operator\":\"rawvalue\",\"type\":\"header\",\"value\":\"testvalue\"}]}]
     *
     * @var string
     */
    public $entryRule;

    /**
     * @description The ID of the lane group.
     *
     * @example 95
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the lane.
     *
     * @example 88
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the lane.
     *
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The association relationships between lanes and applications.
     *
     * @var swimmingLaneAppRelationShipList[]
     */
    public $swimmingLaneAppRelationShipList;

    /**
     * @description The tag of the lane.
     *
     * @example 8202e09
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'appInfos'                        => 'AppInfos',
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
        if (null !== $this->appInfos) {
            $res['AppInfos'] = $this->appInfos;
        }
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
        if (isset($map['AppInfos'])) {
            $model->appInfos = $map['AppInfos'];
        }
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
