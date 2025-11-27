<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonResponseBody\data\dashboards;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonResponseBody\data\environments;

class data extends Model
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
     * @var string
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

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->dashboards)) {
            Model::validateArray($this->dashboards);
        }
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dashboards) {
            if (\is_array($this->dashboards)) {
                $res['dashboards'] = [];
                $n1 = 0;
                foreach ($this->dashboards as $item1) {
                    $res['dashboards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['keywords'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dashboards'])) {
            if (!empty($map['dashboards'])) {
                $model->dashboards = [];
                $n1 = 0;
                foreach ($map['dashboards'] as $item1) {
                    $model->dashboards[$n1] = dashboards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1] = environments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }

        if (isset($map['keywords'])) {
            if (!empty($map['keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
                    ++$n1;
                }
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
