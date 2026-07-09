<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListEventMetaCacheAllKeysDataResult extends Model
{
    /**
     * @var string[]
     */
    public $annotation;

    /**
     * @var string[]
     */
    public $label;

    /**
     * @var string[]
     */
    public $resourceTag;
    protected $_name = [
        'annotation' => 'annotation',
        'label' => 'label',
        'resourceTag' => 'resourceTag',
    ];

    public function validate()
    {
        if (\is_array($this->annotation)) {
            Model::validateArray($this->annotation);
        }
        if (\is_array($this->label)) {
            Model::validateArray($this->label);
        }
        if (\is_array($this->resourceTag)) {
            Model::validateArray($this->resourceTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotation) {
            if (\is_array($this->annotation)) {
                $res['annotation'] = [];
                $n1 = 0;
                foreach ($this->annotation as $item1) {
                    $res['annotation'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            if (\is_array($this->label)) {
                $res['label'] = [];
                $n1 = 0;
                foreach ($this->label as $item1) {
                    $res['label'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceTag) {
            if (\is_array($this->resourceTag)) {
                $res['resourceTag'] = [];
                $n1 = 0;
                foreach ($this->resourceTag as $item1) {
                    $res['resourceTag'][$n1] = $item1;
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
        if (isset($map['annotation'])) {
            if (!empty($map['annotation'])) {
                $model->annotation = [];
                $n1 = 0;
                foreach ($map['annotation'] as $item1) {
                    $model->annotation[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['label'])) {
            if (!empty($map['label'])) {
                $model->label = [];
                $n1 = 0;
                foreach ($map['label'] as $item1) {
                    $model->label[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceTag'])) {
            if (!empty($map['resourceTag'])) {
                $model->resourceTag = [];
                $n1 = 0;
                foreach ($map['resourceTag'] as $item1) {
                    $model->resourceTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
