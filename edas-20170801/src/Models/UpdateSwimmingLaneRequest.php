<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimmingLaneRequest extends Model
{
    /**
     * @description The list of applications that are related to the lane.
     *
     * @example [{"appId":"8e7689af-6ddd-4676-8ee6-5fbecdf2****"},{"appId":"f72deaac-26ba-429a-948d-5fa47c4a****"},{"appId":"99a2d4b5-99a5-4e25-a964-1bd03a17****"}]
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
     * @description The configuration of the throttling rule.
     *
     * @example [{"priority":1,"path":"/traffictest","condition":"AND","restItems":[{"type":"header","name":"testheader","value":"testheadervalue","cond":"==","operator":"rawvalue"}]}]
     *
     * @var string
     */
    public $entryRules;

    /**
     * @description The ID of the lane.
     *
     * @example 224
     *
     * @var int
     */
    public $laneId;

    /**
     * @description The name of the lane.
     *
     * @example test-swimlane
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'appInfos'    => 'AppInfos',
        'enableRules' => 'EnableRules',
        'entryRules'  => 'EntryRules',
        'laneId'      => 'LaneId',
        'name'        => 'Name',
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
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSwimmingLaneRequest
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
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
