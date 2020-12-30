<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeCategoriesResponseBody\categories\category;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeCategoriesResponseBody\categories\category\demoProjects\demoProject;
use AlibabaCloud\Tea\Model;

class demoProjects extends Model
{
    /**
     * @var demoProject[]
     */
    public $demoProject;
    protected $_name = [
        'demoProject' => 'DemoProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demoProject) {
            $res['DemoProject'] = [];
            if (null !== $this->demoProject && \is_array($this->demoProject)) {
                $n = 0;
                foreach ($this->demoProject as $item) {
                    $res['DemoProject'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demoProjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoProject'])) {
            if (!empty($map['DemoProject'])) {
                $model->demoProject = [];
                $n                  = 0;
                foreach ($map['DemoProject'] as $item) {
                    $model->demoProject[$n++] = null !== $item ? demoProject::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
