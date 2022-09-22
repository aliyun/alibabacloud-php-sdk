<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeResponseBody\scenarios;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeResponseBody\scenarios\contents\ecsScenarioContentData;
use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @var string[]
     */
    public $action;

    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $colorLevel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ecsScenarioContentData[]
     */
    public $ecsScenarioContentData;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $supportCancel;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string[]
     */
    public $track;
    protected $_name = [
        'action'                 => 'Action',
        'attributes'             => 'Attributes',
        'colorLevel'             => 'ColorLevel',
        'description'            => 'Description',
        'ecsScenarioContentData' => 'EcsScenarioContentData',
        'icon'                   => 'Icon',
        'supportCancel'          => 'SupportCancel',
        'tips'                   => 'Tips',
        'title'                  => 'Title',
        'track'                  => 'Track',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->colorLevel) {
            $res['ColorLevel'] = $this->colorLevel;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsScenarioContentData) {
            $res['EcsScenarioContentData'] = [];
            if (null !== $this->ecsScenarioContentData && \is_array($this->ecsScenarioContentData)) {
                $n = 0;
                foreach ($this->ecsScenarioContentData as $item) {
                    $res['EcsScenarioContentData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->track) {
            $res['Track'] = $this->track;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['ColorLevel'])) {
            $model->colorLevel = $map['ColorLevel'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsScenarioContentData'])) {
            if (!empty($map['EcsScenarioContentData'])) {
                $model->ecsScenarioContentData = [];
                $n                             = 0;
                foreach ($map['EcsScenarioContentData'] as $item) {
                    $model->ecsScenarioContentData[$n++] = null !== $item ? ecsScenarioContentData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Track'])) {
            $model->track = $map['Track'];
        }

        return $model;
    }
}
