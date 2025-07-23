<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\dashboards;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments;
use AlibabaCloud\Tea\Model;

class AddonMeta extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @var string
     */
    public $description;

    /**
     * @var environments[]
     */
    public $environments;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $latestReleaseCreateTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $once;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'alias' => 'alias',
        'categories' => 'categories',
        'dashboards' => 'dashboards',
        'description' => 'description',
        'environments' => 'environments',
        'icon' => 'icon',
        'keywords' => 'keywords',
        'language' => 'language',
        'latestReleaseCreateTime' => 'latestReleaseCreateTime',
        'name' => 'name',
        'once' => 'once',
        'scene' => 'scene',
        'version' => 'version',
        'weight' => 'weight',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->categories) {
            $res['categories'] = $this->categories;
        }
        if (null !== $this->dashboards) {
            $res['dashboards'] = [];
            if (null !== $this->dashboards && \is_array($this->dashboards)) {
                $n = 0;
                foreach ($this->dashboards as $item) {
                    $res['dashboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environments) {
            $res['environments'] = [];
            if (null !== $this->environments && \is_array($this->environments)) {
                $n = 0;
                foreach ($this->environments as $item) {
                    $res['environments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->keywords) {
            $res['keywords'] = $this->keywords;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->latestReleaseCreateTime) {
            $res['latestReleaseCreateTime'] = $this->latestReleaseCreateTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->once) {
            $res['once'] = $this->once;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddonMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = $map['categories'];
            }
        }
        if (isset($map['dashboards'])) {
            if (!empty($map['dashboards'])) {
                $model->dashboards = [];
                $n = 0;
                foreach ($map['dashboards'] as $item) {
                    $model->dashboards[$n++] = null !== $item ? dashboards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n = 0;
                foreach ($map['environments'] as $item) {
                    $model->environments[$n++] = null !== $item ? environments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['keywords'])) {
            if (!empty($map['keywords'])) {
                $model->keywords = $map['keywords'];
            }
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['latestReleaseCreateTime'])) {
            $model->latestReleaseCreateTime = $map['latestReleaseCreateTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['once'])) {
            $model->once = $map['once'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
