<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class TransformerForModify extends Model
{
    /**
     * @var TransformAction[]
     */
    public $actions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var bool
     */
    public $quitAfterMatch;

    /**
     * @var int
     */
    public $sortId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $transformerName;
    protected $_name = [
        'actions'         => 'actions',
        'description'     => 'description',
        'filterSetting'   => 'filterSetting',
        'quitAfterMatch'  => 'quitAfterMatch',
        'sortId'          => 'sortId',
        'transformerName' => 'transformerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->quitAfterMatch) {
            $res['quitAfterMatch'] = $this->quitAfterMatch;
        }
        if (null !== $this->sortId) {
            $res['sortId'] = $this->sortId;
        }
        if (null !== $this->transformerName) {
            $res['transformerName'] = $this->transformerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformerForModify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? TransformAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }
        if (isset($map['quitAfterMatch'])) {
            $model->quitAfterMatch = $map['quitAfterMatch'];
        }
        if (isset($map['sortId'])) {
            $model->sortId = $map['sortId'];
        }
        if (isset($map['transformerName'])) {
            $model->transformerName = $map['transformerName'];
        }

        return $model;
    }
}
