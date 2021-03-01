<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimmingLaneRequest extends Model
{
    /**
     * @var int
     */
    public $laneId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @var string
     */
    public $appInfos;

    /**
     * @var string
     */
    public $entryRules;
    protected $_name = [
        'laneId'      => 'LaneId',
        'name'        => 'Name',
        'enableRules' => 'EnableRules',
        'appInfos'    => 'AppInfos',
        'entryRules'  => 'EntryRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
        }
        if (null !== $this->appInfos) {
            $res['AppInfos'] = $this->appInfos;
        }
        if (null !== $this->entryRules) {
            $res['EntryRules'] = $this->entryRules;
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
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
        }
        if (isset($map['AppInfos'])) {
            $model->appInfos = $map['AppInfos'];
        }
        if (isset($map['EntryRules'])) {
            $model->entryRules = $map['EntryRules'];
        }

        return $model;
    }
}
