<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionForSNSModify extends Model
{
    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var WorkspaceFilterSetting
     */
    public $workspaceFilterSetting;
    protected $_name = [
        'filterSetting' => 'filterSetting',
        'workspaceFilterSetting' => 'workspaceFilterSetting',
    ];

    public function validate()
    {
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (null !== $this->workspaceFilterSetting) {
            $this->workspaceFilterSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->workspaceFilterSetting) {
            $res['workspaceFilterSetting'] = null !== $this->workspaceFilterSetting ? $this->workspaceFilterSetting->toArray($noStream) : $this->workspaceFilterSetting;
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
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['workspaceFilterSetting'])) {
            $model->workspaceFilterSetting = WorkspaceFilterSetting::fromMap($map['workspaceFilterSetting']);
        }

        return $model;
    }
}
