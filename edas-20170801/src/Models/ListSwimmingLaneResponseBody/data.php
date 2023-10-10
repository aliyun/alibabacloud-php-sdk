<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneResponseBody\data\swimmingLaneAppRelationShipList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the throttling rule is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableRules;

    /**
     * @description The conditions.
     *
     * @example [{\"condition\":\"AND\",\"enable\":true,\"path\":\"/\",\"priority\":1,\"restItems\":[{\"cond\":\"==\",\"datum\":\"value\",\"name\":\"tags\",\"operator\":\"rawvalue\",\"type\":\"header\",\"value\":\"value\"}]}]
     *
     * @var string
     */
    public $entryRule;

    /**
     * @description The ID of the lane group.
     *
     * @example 156
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the lane.
     *
     * @example 348
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the lane.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the microservices namespace.
     *
     * @example cn-hangzhou:pre2
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The expected tag.
     *
     * @example d0ad1052
     *
     * @var string
     */
    public $scenarioSign;

    /**
     * @description The applications that are related to the lane.
     *
     * @var swimmingLaneAppRelationShipList[]
     */
    public $swimmingLaneAppRelationShipList;

    /**
     * @description The tag.
     *
     * @example 2cb6b8a
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'enableRules'                     => 'EnableRules',
        'entryRule'                       => 'EntryRule',
        'groupId'                         => 'GroupId',
        'id'                              => 'Id',
        'name'                            => 'Name',
        'namespaceId'                     => 'NamespaceId',
        'scenarioSign'                    => 'ScenarioSign',
        'swimmingLaneAppRelationShipList' => 'SwimmingLaneAppRelationShipList',
        'tag'                             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
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
        if (null !== $this->scenarioSign) {
            $res['ScenarioSign'] = $this->scenarioSign;
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
        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
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
        if (isset($map['ScenarioSign'])) {
            $model->scenarioSign = $map['ScenarioSign'];
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
