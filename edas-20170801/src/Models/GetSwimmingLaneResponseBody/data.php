<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetSwimmingLaneResponseBody\data\swimmingLaneAppRelationShipList;
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
    public $scenarioSign;

    /**
     * @var string
     */
    public $entryRule;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var swimmingLaneAppRelationShipList[]
     */
    public $swimmingLaneAppRelationShipList;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'namespaceId'                     => 'NamespaceId',
        'groupId'                         => 'GroupId',
        'scenarioSign'                    => 'ScenarioSign',
        'entryRule'                       => 'EntryRule',
        'tag'                             => 'Tag',
        'enableRules'                     => 'EnableRules',
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
        if (null !== $this->scenarioSign) {
            $res['ScenarioSign'] = $this->scenarioSign;
        }
        if (null !== $this->entryRule) {
            $res['EntryRule'] = $this->entryRule;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
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
        if (isset($map['ScenarioSign'])) {
            $model->scenarioSign = $map['ScenarioSign'];
        }
        if (isset($map['EntryRule'])) {
            $model->entryRule = $map['EntryRule'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
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
