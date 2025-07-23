<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\annotations;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\fieldRules;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\ipMatchRule;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\labels;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\tags;
use AlibabaCloud\Tea\Model;

class EntityDiscoverRule extends Model
{
    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var string[]
     */
    public $entityTypes;

    /**
     * @var fieldRules[]
     */
    public $fieldRules;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var ipMatchRule[]
     */
    public $ipMatchRule;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'annotations' => 'annotations',
        'entityTypes' => 'entityTypes',
        'fieldRules' => 'fieldRules',
        'instanceIds' => 'instanceIds',
        'ipMatchRule' => 'ipMatchRule',
        'labels' => 'labels',
        'regionIds' => 'regionIds',
        'resourceGroupId' => 'resourceGroupId',
        'tags' => 'tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->entityTypes) {
            $res['entityTypes'] = $this->entityTypes;
        }
        if (null !== $this->fieldRules) {
            $res['fieldRules'] = [];
            if (null !== $this->fieldRules && \is_array($this->fieldRules)) {
                $n = 0;
                foreach ($this->fieldRules as $item) {
                    $res['fieldRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ipMatchRule) {
            $res['ipMatchRule'] = [];
            if (null !== $this->ipMatchRule && \is_array($this->ipMatchRule)) {
                $n = 0;
                foreach ($this->ipMatchRule as $item) {
                    $res['ipMatchRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIds) {
            $res['regionIds'] = $this->regionIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EntityDiscoverRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n = 0;
                foreach ($map['annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['entityTypes'])) {
            if (!empty($map['entityTypes'])) {
                $model->entityTypes = $map['entityTypes'];
            }
        }
        if (isset($map['fieldRules'])) {
            if (!empty($map['fieldRules'])) {
                $model->fieldRules = [];
                $n = 0;
                foreach ($map['fieldRules'] as $item) {
                    $model->fieldRules[$n++] = null !== $item ? fieldRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = $map['instanceIds'];
            }
        }
        if (isset($map['ipMatchRule'])) {
            if (!empty($map['ipMatchRule'])) {
                $model->ipMatchRule = [];
                $n = 0;
                foreach ($map['ipMatchRule'] as $item) {
                    $model->ipMatchRule[$n++] = null !== $item ? ipMatchRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['regionIds'])) {
            if (!empty($map['regionIds'])) {
                $model->regionIds = $map['regionIds'];
            }
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
