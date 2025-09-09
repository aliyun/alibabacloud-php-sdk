<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateCriterionIssuesResponseBody\templateCriterionIssueList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateCriterionIssuesResponseBody\templateCriterionIssueList\criterionIssues\extendInfo;

class criterionIssues extends Model
{
    /**
     * @var extendInfo
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extendInfo' => 'ExtendInfo',
        'level' => 'Level',
        'position' => 'Position',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->extendInfo) {
            $this->extendInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = null !== $this->extendInfo ? $this->extendInfo->toArray($noStream) : $this->extendInfo;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = extendInfo::fromMap($map['ExtendInfo']);
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
