<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateSwimmingLaneRequest extends Model
{
    /**
     * @var string
     */
    public $appInfos;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @var string
     */
    public $entryRules;

    /**
     * @var int
     */
    public $laneId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'appInfos' => 'AppInfos',
        'enableRules' => 'EnableRules',
        'entryRules' => 'EntryRules',
        'laneId' => 'LaneId',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
