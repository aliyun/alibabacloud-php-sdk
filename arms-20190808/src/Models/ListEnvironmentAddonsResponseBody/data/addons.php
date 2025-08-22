<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\dashboards;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments;

class addons extends Model
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
        'alias' => 'Alias',
        'categories' => 'Categories',
        'dashboards' => 'Dashboards',
        'description' => 'Description',
        'environments' => 'Environments',
        'icon' => 'Icon',
        'keywords' => 'Keywords',
        'language' => 'Language',
        'latestReleaseCreateTime' => 'LatestReleaseCreateTime',
        'name' => 'Name',
        'once' => 'Once',
        'scene' => 'Scene',
        'version' => 'Version',
        'weight' => 'Weight',
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
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dashboards) {
            if (\is_array($this->dashboards)) {
                $res['Dashboards'] = [];
                $n1 = 0;
                foreach ($this->dashboards as $item1) {
                    $res['Dashboards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['Environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['Environments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->latestReleaseCreateTime) {
            $res['LatestReleaseCreateTime'] = $this->latestReleaseCreateTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->once) {
            $res['Once'] = $this->once;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Dashboards'])) {
            if (!empty($map['Dashboards'])) {
                $model->dashboards = [];
                $n1 = 0;
                foreach ($map['Dashboards'] as $item1) {
                    $model->dashboards[$n1] = dashboards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Environments'])) {
            if (!empty($map['Environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['Environments'] as $item1) {
                    $model->environments[$n1] = environments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['LatestReleaseCreateTime'])) {
            $model->latestReleaseCreateTime = $map['LatestReleaseCreateTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Once'])) {
            $model->once = $map['Once'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
