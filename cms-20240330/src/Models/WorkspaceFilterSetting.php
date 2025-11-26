<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class WorkspaceFilterSetting extends Model
{
    /**
     * @var FilterSetting
     */
    public $tagSelector;

    /**
     * @var string[]
     */
    public $workspaceUuids;
    protected $_name = [
        'tagSelector' => 'tagSelector',
        'workspaceUuids' => 'workspaceUuids',
    ];

    public function validate()
    {
        if (null !== $this->tagSelector) {
            $this->tagSelector->validate();
        }
        if (\is_array($this->workspaceUuids)) {
            Model::validateArray($this->workspaceUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagSelector) {
            $res['tagSelector'] = null !== $this->tagSelector ? $this->tagSelector->toArray($noStream) : $this->tagSelector;
        }

        if (null !== $this->workspaceUuids) {
            if (\is_array($this->workspaceUuids)) {
                $res['workspaceUuids'] = [];
                $n1 = 0;
                foreach ($this->workspaceUuids as $item1) {
                    $res['workspaceUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['tagSelector'])) {
            $model->tagSelector = FilterSetting::fromMap($map['tagSelector']);
        }

        if (isset($map['workspaceUuids'])) {
            if (!empty($map['workspaceUuids'])) {
                $model->workspaceUuids = [];
                $n1 = 0;
                foreach ($map['workspaceUuids'] as $item1) {
                    $model->workspaceUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
