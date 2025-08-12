<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\annotations;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\fieldRules;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\ipMatchRule;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\labels;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule\tags;

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

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->entityTypes)) {
            Model::validateArray($this->entityTypes);
        }
        if (\is_array($this->fieldRules)) {
            Model::validateArray($this->fieldRules);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->ipMatchRule)) {
            Model::validateArray($this->ipMatchRule);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['annotations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entityTypes) {
            if (\is_array($this->entityTypes)) {
                $res['entityTypes'] = [];
                $n1 = 0;
                foreach ($this->entityTypes as $item1) {
                    $res['entityTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fieldRules) {
            if (\is_array($this->fieldRules)) {
                $res['fieldRules'] = [];
                $n1 = 0;
                foreach ($this->fieldRules as $item1) {
                    $res['fieldRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['instanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['instanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipMatchRule) {
            if (\is_array($this->ipMatchRule)) {
                $res['ipMatchRule'] = [];
                $n1 = 0;
                foreach ($this->ipMatchRule as $item1) {
                    $res['ipMatchRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['regionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['regionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['annotations'] as $item1) {
                    $model->annotations[$n1] = annotations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityTypes'])) {
            if (!empty($map['entityTypes'])) {
                $model->entityTypes = [];
                $n1 = 0;
                foreach ($map['entityTypes'] as $item1) {
                    $model->entityTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['fieldRules'])) {
            if (!empty($map['fieldRules'])) {
                $model->fieldRules = [];
                $n1 = 0;
                foreach ($map['fieldRules'] as $item1) {
                    $model->fieldRules[$n1] = fieldRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['instanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ipMatchRule'])) {
            if (!empty($map['ipMatchRule'])) {
                $model->ipMatchRule = [];
                $n1 = 0;
                foreach ($map['ipMatchRule'] as $item1) {
                    $model->ipMatchRule[$n1] = ipMatchRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['regionIds'])) {
            if (!empty($map['regionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['regionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
