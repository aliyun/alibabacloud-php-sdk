<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InsertSwimmingLaneRequest extends Model
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
    public $groupId;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'appInfos' => 'AppInfos',
        'enableRules' => 'EnableRules',
        'entryRules' => 'EntryRules',
        'groupId' => 'GroupId',
        'logicalRegionId' => 'LogicalRegionId',
        'name' => 'Name',
        'tag' => 'Tag',
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
