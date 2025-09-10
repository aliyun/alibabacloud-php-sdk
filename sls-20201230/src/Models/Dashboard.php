<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class Dashboard extends Model
{
    /**
     * @var string[]
     */
    public $attribute;

    /**
     * @var Chart[]
     */
    public $charts;

    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'attribute' => 'attribute',
        'charts' => 'charts',
        'dashboardName' => 'dashboardName',
        'description' => 'description',
        'displayName' => 'displayName',
    ];

    public function validate()
    {
        if (\is_array($this->attribute)) {
            Model::validateArray($this->attribute);
        }
        if (\is_array($this->charts)) {
            Model::validateArray($this->charts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            if (\is_array($this->attribute)) {
                $res['attribute'] = [];
                foreach ($this->attribute as $key1 => $value1) {
                    $res['attribute'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->charts) {
            if (\is_array($this->charts)) {
                $res['charts'] = [];
                $n1 = 0;
                foreach ($this->charts as $item1) {
                    $res['charts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dashboardName) {
            $res['dashboardName'] = $this->dashboardName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
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
        if (isset($map['attribute'])) {
            if (!empty($map['attribute'])) {
                $model->attribute = [];
                foreach ($map['attribute'] as $key1 => $value1) {
                    $model->attribute[$key1] = $value1;
                }
            }
        }

        if (isset($map['charts'])) {
            if (!empty($map['charts'])) {
                $model->charts = [];
                $n1 = 0;
                foreach ($map['charts'] as $item1) {
                    $model->charts[$n1] = Chart::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dashboardName'])) {
            $model->dashboardName = $map['dashboardName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
