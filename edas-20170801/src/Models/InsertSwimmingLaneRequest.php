<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertSwimmingLaneRequest extends Model
{
    /**
     * @description The information about applications related to the lane.
     *
     * @example [{"appId":"f72deaac-26ba-429a-948d-5fa47c4a****"},{"appId":"5049d2c8-f997-4fc9-92a2-153506a6****"}]
     *
     * @var string
     */
    public $appInfos;

    /**
     * @description Specifies whether to enable the throttling rule.
     *
     * @example true
     *
     * @var bool
     */
    public $enableRules;

    /**
     * @description The throttling conditions.
     *
     * @example [{"priority":1,"path":"/traffic","condition":"AND","restItems":[{"type":"header","name":"testheader","value":"testvalue","cond":"==","operator":"rawvalue"}]}]
     *
     * @var string
     */
    public $entryRules;

    /**
     * @description The ID of the lane group.
     *
     * @example 95
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the custom namespace. The ID is in the `physical region ID:custom namespace identifier` format. Example: `cn-hangzhou:test`.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The name of the lane.
     *
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @description The tag.
     *
     * @example tag
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'appInfos'        => 'AppInfos',
        'enableRules'     => 'EnableRules',
        'entryRules'      => 'EntryRules',
        'groupId'         => 'GroupId',
        'logicalRegionId' => 'LogicalRegionId',
        'name'            => 'Name',
        'tag'             => 'Tag',
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
        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
        }
        if (null !== $this->entryRules) {
            $res['EntryRules'] = $this->entryRules;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertSwimmingLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfos'])) {
            $model->appInfos = $map['AppInfos'];
        }
        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
        }
        if (isset($map['EntryRules'])) {
            $model->entryRules = $map['EntryRules'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
