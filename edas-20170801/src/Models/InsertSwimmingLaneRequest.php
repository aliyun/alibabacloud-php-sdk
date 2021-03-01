<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertSwimmingLaneRequest extends Model
{
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

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $entryRules;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @var string
     */
    public $appInfos;
    protected $_name = [
        'logicalRegionId' => 'LogicalRegionId',
        'name'            => 'Name',
        'tag'             => 'Tag',
        'groupId'         => 'GroupId',
        'entryRules'      => 'EntryRules',
        'enableRules'     => 'EnableRules',
        'appInfos'        => 'AppInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->entryRules) {
            $res['EntryRules'] = $this->entryRules;
        }
        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
        }
        if (null !== $this->appInfos) {
            $res['AppInfos'] = $this->appInfos;
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
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['EntryRules'])) {
            $model->entryRules = $map['EntryRules'];
        }
        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
        }
        if (isset($map['AppInfos'])) {
            $model->appInfos = $map['AppInfos'];
        }

        return $model;
    }
}
